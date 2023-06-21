<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index'])->middleware('auth')->name('home');

Route::get('/profile',[ProfileController::class,'index'])->middleware('auth')->name('profile');

Route::get('/contacts',[ContactsController::class,'index'])->middleware('auth')->name('contacts');

Route::get('/notifications',[NotificationsController::class,'index'])->middleware('auth')->name('notifications');

Route::get('/settings',[SettingsController::class,'index'])->middleware('auth')->name('settings');

Route::get('/login',[AuthController::class,'indexlogin'])->name('login');

Route::post('/login',[AuthController::class,'login'])->name('login.submit');

Route::get('/signup',[AuthController::class,'indexsignup'])->name('signup');

Route::post('/signup',[AuthController::class,'signup'])->name('signup.submit');

Route::get('/logout',[AuthController::class,'logout'])->middleware('auth')->name('logout');
