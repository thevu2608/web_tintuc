<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PropertyController;



Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(PropertyController::class)->prefix('property')->group(function () {
        Route::get('', 'index')->name('property');
        Route::get('create', 'create')->name('property.create');
        Route::post('store', 'store')->name('property.store');
        Route::get('show/{id}', 'show')->name('property.show');
        Route::get('edit/{id}', 'edit')->name('property.edit');
        Route::put('edit/{id}', 'update')->name('property.update');
        Route::delete('destroy/{id}', 'destroy')->name('property.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
