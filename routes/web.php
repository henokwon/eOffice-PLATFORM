<?php

use App\Http\Controllers\Api\CustomerFormController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GenerateFormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HighchartController;
use App\Http\Controllers\LegacyFileController;
use App\Http\Controllers\TourFormController;
use App\Http\Controllers\BlogPostController;

Route::get('/', function () {
    return view('landingPage');
});
Route::get('/service', function(){
    return view('service');
})->name('dashboard')->middleware(['auth', 'verified']);

// eServic
Route::post('/tour', [TourFormController::class,'sent']);
Route::post('/customer',[CustomerFormController::class, 'sendData']);
Route::get('/dashboard', [HighchartController::class, 'handleChart'])->name('dashboard')->middleware(['auth', 'verified']);

// Route::get('/customerForm', [HighchartController::class, 'handleChart'])->name('customerForm')->middleware(['auth', 'verified']);

Route::get('eService/customer-form', function () {
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

// Route::get('/{any}', function () {
//     return view('service');
//  })->where('any', ".*");




// Form generator
Route::get('/generate/form',[GenerateFormController::class,'index']);
Route::get('/td',[FormController::class,'addForms']);
Route::get('/input/{id}',[FormController::class,'addInputs']);
Route::get('/get/input/{id}',[FormController::class,'getInputsByForm']);

Route::post('/post/form_title',[FormController::class,'postFormTitle']);
Route::post('/post/form_element',[FormController::class,'postFormElement']);
Route::get('/get/form_title',[FormController::class,'getFormTitle']);
Route::get('/get/form_element/{id}',[FormController::class,'getFormElement']);

Route::get('/get/forms',[FormController::class,'view']);
Route::get('/gf',function(){
    return view('form.view');
});

Route::get('services',function(){
    return view('service.service');
})->name('services');
Route::get('/posts',function(){
    return view('posts.post');
})->name('posts');

// BlogPost Routes
Route::get('/blog/create/post', [BlogPostController::class, 'create']);  //shows create post form
Route::post('/blog/create/post', [BlogPostController::class, 'store']);  //saves the created post to the databse
Route::get('/edit-post/{id}', [BlogPostController::class, 'edit']); //shows edit post form
Route::put('/update-post/{id}', [BlogPostController::class, 'update']); //commits edited post to the database 
Route::get('/delete/{id}', [BlogPostController::class, 'destroy']); //deletes post from the database
Route::get('/manage/mange', [BlogPostController::class, 'manage']); //deletes post from the database
Route::get('/search', [BlogPostController::class, 'search']); //deletes post from the database

Route::post('/logouts', [BlogPostController::class, 'logout']); //
Route::get('/posts', [BlogPostController::class, 'index'])->name('posts');; //


// end for BlogPost routes


