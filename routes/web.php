<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/admin/login', function () {
    return view('auth.login');
})->name('login');

Route::prefix('dashboard')->middleware(['auth', 'verified'])->name('dashboard.')->group(static function() {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::prefix('posts')->name('posts.')->group(static function() {
        Route::get('create', [PostController::class, 'create'])->name('create');
        Route::get('/{post}/edit', [PostController::class, 'edit'])->name('edit');
    });
});

Route::get('/chi-siamo', function() {
    return view('about_us');
})->name('about_us');
Route::get('/servizi', function() {
    return view('services');
})->name('services');
Route::get('/news', function() {
    return view('news');
})->name('news');
Route::get('news/{post}/show', [PostController::class, 'show'])->name('post');
Route::get('/contatti', function() {
    return view('contacts');
})->name('contacts');
Route::get('/documenti', function() {
    return view('certifications');
})->name('certifications');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
