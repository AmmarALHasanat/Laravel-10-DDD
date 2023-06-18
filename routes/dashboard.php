<?php

use Illuminate\Support\Facades\Route;

// Route::group(['middleware' => 'auth:admin'], function () {
//     Route::get('/', [DashboardController::class,'show'])->name('dashboard');
// });

// Route::get('/login',[DashboardController::class, 'showLoginForm'])->name('dashboard.login');
// Route::post('/login',[AuthenticationAdminController::class,'login']);

Route::get('/', function () {
    return 'Hello World';
});