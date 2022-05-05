<?php

use App\Models\Employee;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Employee::class)->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('email');
            $table->text('emp_id')->nullable();
            $table->string('department');
            $table->date('depature_date');
            $table->date('return_date');
            $table->string('depature_city');
            $table->string('arival_city');
            $table->text('reason');
            $table->json('travel_needed')->nullable();
            $table->timestamps();
          

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tour_forms');
    }
}
