<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('index');
})->name('home');

// Authentication Routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/client', [AuthController::class, 'registerClient'])->name('register.client.post');
Route::post('/register/freelancer', [AuthController::class, 'registerFreelancer'])->name('register.freelancer.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('client/profile', [ProfileController::class, 'show'])->name('profile.show-client');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/freelancer/profile', [ProfileController::class, 'showFreelancer'])->name('profile.show-freelancer');
});

// Job Listings Route
Route::get('/browse-jobs', [JobController::class, 'index'])->name('browse-jobs');
