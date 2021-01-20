<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredMemberController;
use App\Http\Controllers\Auth\ChangePasswordController;

use Illuminate\Support\Facades\Route;

/* registracija */
Route::get('/register', [RegisteredMemberController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredMemberController::class, 'store'])
    ->middleware('guest');

/* login */
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

/* logout */
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

/* change password */
Route::get('auth/change_password/{member}', [ChangePasswordController::class, 'edit'])
    ->middleware('auth')
    ->name('change_password.edit');

Route::post('auth/change_password/{member}', [ChangePasswordController::class, 'update'])
    ->middleware('auth')
    ->name('change_password.update');
