<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\CustomLoginController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest')
                ->name('register');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest');
Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');
Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware('guest')
                ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->middleware('auth')
                ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth')
                ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');
// User defined router
Route::post('/service', [CustomLoginController::class, 'customerStore'])
                ->middleware('guest')->name("service");



                // Route::post('/subscribe',[HomeController::class, 'subscribe'])->name('subscribe');
//  Route::group(['middleware'=>['revalidate_back_history']],function(){
// 	// Route::get('/',[HomeController::class,'home'])->name('home');
// 	Route::group(['prefix'=>'auth','middleware'=>['custom_guest']],function(){

// 		Route::get('/registration',[AuthController::class, 'getRegister'])->name('getRegister');
// 		Route::post('/registration',[AuthController::class,'postRegister'])->name('postRegister');

// 		Route::post('/ajax-register',[AuthController::class, 'ajaxRegister'])->name('ajaxRegister');
		

// 		Route::post('/check_email_unique',[AuthController::class,'check_email_unique'])->name('check_email_unique');

// 		Route::get('/verify-email/{verification_code}',[AuthController::class,'verify_email'])->name('verify_email');

// 		Route::get('/login',[AuthController::class,'getLogin'])->name('getLogin');
// 		Route::post('/login',[AuthenticatedSessionController::class,'postLogin'])->name('postLogin');

// 		Route::post('/ajax-login',[AuthenticatedSessionController::class, 'ajaxLogin'])->name('ajaxLogin');
		
// 		Route::get('/forget-password',[AuthController::class,'getForgetPassword'])->name('getForgetPassword');

// 		Route::post('/forget-password', [AuthController::class, 'postForgetPassword'])->name('postForgetPassword');

// 		Route::get('/reset-password/{reset_code}',[AuthController::class,'getResetPassword'])->name('getResetPassword');
		
// 		Route::post('/reset-password/{reset_code}',[AuthController::class,'postResetPassword'])->name('postResetPassword');

// 	});


// 	Route::get('/auth/logout',[AuthController::class,'logout'])->name('logout')->middleware('custom_auth');

// 	Route::group(['prefix'=>'profile','middleware'=>['custom_auth']],function(){
// 		Route::get('/dashboard',[ProfileController::class,'dashboard'])->name('dashboard');

// 		Route::get('/edit-profile',[ProfileController::class,'edit_profile'])->name('edit_profile');
// 		Route::put('/edit-profile',[ProfileController::class,'update_profile'])->name('update_profile');

// 		Route::get('/change-password',[ProfileController::class,'change_password'])->name('change_password');
// 		Route::post('/update-password',[ProfileController::class,'update_password'])->name('update_password');	
// 	});
// });