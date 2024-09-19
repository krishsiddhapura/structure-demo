<?php

use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthenticationController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "admin" middleware group. Make something great!
|
*/


Route::middleware(['guest:admin','prevent-back'])->group(function (){
    # Authentication Modules
    Route::controller(AuthenticationController::class)->group(function () {
        Route::get('/', 'login')->name('login');
        Route::post('login-action', 'loginAction')->name('login-action');
    });
});

Route::middleware(['auth:admin','prevent-back'])->group(function (){
    # Dashboard
    Route::controller(DashboardController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard');
        Route::post('list-user', 'listUsers')->name('list-users');
        Route::post('remove-user', 'removeUser')->name('remove-user');
    });

    # Logout
    Route::get('logout', function (){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    })->name('logout');
});
