<?php

use App\Http\Controllers\Api\CustomerFormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HighchartController;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/dashboard', [HighchartController::class, 'handleChart'])->name('dashboard')->middleware(['auth', 'verified']);
Route::get('/service', function(){
    return view('service');
})->name('dashboard')->middleware(['auth', 'verified']);

Route::get('/customerForm', [HighchartController::class, 'handleChart'])->name('customerForm')->middleware(['auth', 'verified']);

Route::get('/customer-form', function () {
    return view('eService.customerForm');
})->middleware(['auth'])->name('customer-form');
Route::get('/leave-form', function () {
    return view('eService.leaveForm');
})->middleware(['auth'])->name('leave-form');
Route::get('/tour-form', function () {
    return view('eService.tourForm');
})->middleware(['auth'])->name('tour-form');


Route::get('/buttons/text', function () {
    return view('buttons-showcase.text');
})->middleware(['auth'])->name('buttons.text');

Route::get('/buttons/icon', function () {
    return view('buttons-showcase.icon');
})->middleware(['auth'])->name('buttons.icon');

Route::get('/buttons/text-icon', function () {
    return view('buttons-showcase.text-icon');
})->middleware(['auth'])->name('buttons.text-icon');

require __DIR__ . '/auth.php';
Route::get('/chart', [HighchartController::class, 'handleChart']);

Route::post('/customer',[CustomerFormController::class, 'sendData']);

Route::get('/{pathMatch}', function () {
    return view('welcome');
 })->where('pathMatch', ".*");