<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/journey', function () {
    return view('journey');
});

Route::get('/mentors', function () {
    return view('mentors');
});

Route::get('/tasks', function () {
    return view('tasks');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/certificates', function () {
    return view('certificates');
});

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/career-onboarding', function () {
    return view('career-onboarding');
});

Route::get('/simulation-explorer', function () {
    return view('simulation-explorer');
});
