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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/profile',[ProfileController::class,'index'])->name('profile');

Route::get('/contacts',[ContactsController::class,'index'])->name('contacts');

Route::get('/notifications',[NotificationsController::class,'index'])->name('notifications');

Route::get('/settings',[SettingsController::class,'index'])->name('settings');

Route::get('/login',[AuthController::class,'indexlogin'])->name('login');
