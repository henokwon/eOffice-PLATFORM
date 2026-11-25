<?php

namespace Tests\Feature;

use App\Models\Departement;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class DepartmentAuthorizationTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        config([
            'app.key' => 'base64:'.base64_encode(str_repeat('t', 32)),
            'database.default' => 'sqlite',
            'database.connections.sqlite.database' => ':memory:',
            'cache.default' => 'array',
            'session.driver' => 'array',
            'security.admin_user_ids' => [],
        ]);
        DB::purge('sqlite');
        $this->artisan('migrate', ['--path' => [
            'database/migrations/2014_10_12_000000_create_users_table.php',
            'database/migrations/2019_12_14_000001_create_personal_access_tokens_table.php',
            'database/migrations/2021_11_24_073320_create_departements_table.php',
        ]])->assertExitCode(0);
    }

    private function user(): User
    {
        return User::create(['name' => 'Test operator', 'email' => uniqid().'@example.test', 'password' => Hash::make('old-password-123')]);
    }

    public function test_anonymous_department_access_and_chart_are_blocked(): void
    {
        $department = Departement::create(['name' => 'Original']);
        $this->getJson('/api/departements')->assertUnauthorized();
        $this->postJson('/api/departements', ['name' => 'Injected'])->assertUnauthorized();
        $this->putJson('/api/departements/'.$department->id, ['name' => 'Injected'])->assertUnauthorized();
        $this->deleteJson('/api/departements/'.$department->id)->assertUnauthorized();
        $this->getJson('/chart')->assertUnauthorized();
        $this->assertDatabaseHas('departements', ['id' => $department->id, 'name' => 'Original']);
    }

    public function test_ordinary_authenticated_users_can_read_but_not_mutate_departments(): void
    {
        $department = Departement::create(['name' => 'Original']);
        $this->actingAs($this->user());
        $this->getJson('/api/departements')->assertOk()->assertJsonPath('meta.per_page', 25);
        $this->getJson('/api/departements/'.$department->id)->assertOk();
        $this->postJson('/api/departements', ['name' => 'Injected'])->assertForbidden();
        $this->putJson('/api/departements/'.$department->id, ['name' => 'Injected'])->assertForbidden();
        $this->deleteJson('/api/departements/'.$department->id)->assertForbidden();
        $this->assertDatabaseHas('departements', ['id' => $department->id, 'name' => 'Original']);
    }

    public function test_an_approved_operator_can_create_update_and_delete(): void
    {
        $operator = $this->user();
        config(['security.admin_user_ids' => [(string) $operator->id]]);
        $this->actingAs($operator);
        $id = $this->postJson('/api/departements', ['name' => 'Created'])->assertCreated()->json('data.id');
        $this->putJson('/api/departements/'.$id, ['name' => 'Updated'])->assertOk();
        $this->assertDatabaseHas('departements', ['id' => $id, 'name' => 'Updated']);
        $this->deleteJson('/api/departements/'.$id)->assertNoContent();
        $this->assertDatabaseMissing('departements', ['id' => $id]);
    }

    public function test_a_wildcard_sanctum_token_does_not_grant_administration(): void
    {
        $user = $this->user();
        $token = $user->createToken('regression', ['*'])->plainTextToken;
        $this->withToken($token)->postJson('/api/departements', ['name' => 'Injected'])->assertForbidden();
        $this->assertDatabaseMissing('departements', ['name' => 'Injected']);
    }
}
