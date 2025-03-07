<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Redirect root to login page
Route::get('/', function () {
    return redirect()->route('login');
});

// Authentication Routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');

Route::post('/logout', function () {
    Auth::logout();  
    return redirect()->route('login');
})->name('logout');

// Protected Routes (Requires Authentication)
Route::middleware(['auth'])->group(function () {

    // ✅ Redirect users to employee page after login
    Route::get('/dashboard', function () {
        return redirect()->route('employee'); 
    })->name('dashboard'); 

    Route::get('/employee', function () {
        return view('auth.employee');
    })->name('employee');

    Route::get('/messages', function () {
        return view('auth.messages');
    })->name('messages');

    Route::get('/appointments', function () {
        return view('auth.appointments');
    })->name('appointments');

    Route::get('/projects', function () {
        return view('auth.projects');
    })->name('projects');

    Route::get('/settings', function () {
        return view('auth.settings');
    })->name('settings');

    Route::get('/admin', function () {
        return view('auth.admin');
    })->name('admin');
});

// Include Laravel authentication routes
Auth::routes();

// Redirect home route to employee page
Route::get('/home', function () {
    return redirect()->route('employee');
})->name('home');
