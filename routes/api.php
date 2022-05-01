<?php

use App\Http\Controllers\Api\CustomerFormController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DepartementController;
use App\Http\Controllers\Api\LeaveFormController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('departements', DepartementController::class);
Route::apiResource("customerForm",CustomerFormController::class);
Route::get("leaveForm",[LeaveFormController::class, 'data']);
Route::post("/form/save",[LeaveFormController::class, 'sendData']);
