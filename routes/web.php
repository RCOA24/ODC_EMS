<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('auth.dashboard');
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

