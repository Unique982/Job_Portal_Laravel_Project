<?php

use App\Http\Controllers\frontend\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });
 Route::get('/',[HomeController::class,'index'])->name('home');
 Route::get('/account/register', [AccountController::class, 'registration'])->name('account.registration');
 Route::get('/account/login', [AccountController::class, 'login'])->name('account.login');
 Route::get('/job_post', [AccountController::class, 'job'])->name('job_post');
 Route::get('/single_job_details', [AccountController::class, 'details'])->name('single_job_details');
