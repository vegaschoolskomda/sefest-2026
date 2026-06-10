<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page');
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// ======================
// SIJA ONBOARDING FLOWS
// ======================
Route::get('/onboarding/profile-setup', function () {
return view('onboarding.profile-setup');
})->name('onboarding.profile-setup');

Route::get('/onboarding/career-consultation', function () {
return view('onboarding.career-consultation');
})->name('onboarding.career-consultation');

Route::get('/onboarding/ai-analysis', function () {
return view('onboarding.ai-analysis');
})->name('onboarding.ai-analysis');

Route::get('/onboarding/career-recommendation', function () {
return view('onboarding.career-recommendation');
})->name('onboarding.career-recommendation');

// ======================
// SIJA USER DASHBOARD
// ======================
Route::get('/dashboard', function () {
    return view('dashboard.user-dashboard');
})->name('dashboard');

// ======================
// SIJA USER PAGES (Menu)
// ======================
Route::get('/dashboard/rekomendasi-karier', function () {
    return view('dashboard.rekomendasi-karier');
})->name('dashboard.rekomendasi-karier');

Route::get('/dashboard/simulasi-saya', function () {
    return view('dashboard.simulasi-saya');
})->name('dashboard.simulasi-saya');

Route::get('/dashboard/jelajahi-profesi', function () {
    return view('dashboard.jelajahi-profesi');
})->name('dashboard.jelajahi-profesi');

Route::get('/dashboard/mentor-ai', function () {
    return view('dashboard.mentor-ai');
})->name('dashboard.mentor-ai');

Route::get('/dashboard/bimbingan-mentor', function () {
    return view('dashboard.bimbingan-mentor');
})->name('dashboard.bimbingan-mentor');


Route::get('/dashboard/roadmap-karier', function () {
    return view('dashboard.roadmap-karier');
})->name('dashboard.roadmap-karier');

Route::get('/dashboard/portofolio', function () {
    return view('dashboard.portofolio');
})->name('dashboard.portofolio');

Route::get('/dashboard/sertifikat', function () {
    return view('dashboard.sertifikat');
})->name('dashboard.sertifikat');

Route::get('/dashboard/pengaturan', function () {
    return view('dashboard.pengaturan');
})->name('dashboard.pengaturan');





