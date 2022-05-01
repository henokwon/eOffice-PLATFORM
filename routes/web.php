<?php

use App\Http\Controllers\Api\CustomerFormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HighchartController;
use App\Http\Controllers\LegacyFileController;
use App\Http\Controllers\TourFormController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/route', function () {
    return view('eService.service');
});

// eServic
Route::post('/tour', [TourFormController::class,'sent']);
Route::post('/customer',[CustomerFormController::class, 'sendData']);
Route::get('/dashboard', [HighchartController::class, 'handleChart'])->name('dashboard')->middleware(['auth', 'verified']);
Route::get('/eService/customer-form', function () {
    return view('eService.customerForm');
})->middleware(['auth'])->name('eService.customer-form');
Route::get('/eService/leave-form', function () {
    return view('eService.leaveForm');
})->middleware(['auth'])->name('eService.leave-form');
Route::get('/eService/tour-form', [TourFormController::class,'renderForm'] )->middleware(['auth'])->name('eService.tour-form');

// Legacy document

Route::get('/uploadFile', [LegacyFileController::class, 'uploadFile']);
Route::post('/submitForm', [LegacyFileController::class, 'submitForm']);
Route::get('/showFile', [LegacyFileController::class, 'showFile']);
Route::get('download/{file}', [LegacyFileController::class, 'downloadFile']);
Route::get('/view/{id}', [LegacyFileController::class, 'viewFile']);
// 

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


Route::get('/{pathMatch}', function () {
    return view('welcome');
 })->where('pathMatch', ".*");


