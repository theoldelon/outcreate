<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

/////////not yet authenticated////////////////
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/services', function () {
    return view('services');
});
Route::get('/projects', function () {
    return view('dashboards.projects');
})->name('projects');

Route::get('/freelancers', function () {
    return view('dashboards.freelancers');
})->name('freelancers');

Route::get('/clients', function () {
    return view('dashboards.clients');
})->name('clients');

Route::get('/message', function () {
    return view('dashboards.message');
})->name('message');

Route::get('/manage-listings', function () {
    return view('dashboards.manage');
})->name('manage');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


/////////authenticated////////////////

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');

// Dashboard route
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Authentication routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

