<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FreelanceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Group routes that require authentication
Route::middleware('auth')->group(function () {
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    // Admin routes
    Route::middleware([RoleMiddleware::class . ':admin'])->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    });

    // Freelancer routes
    Route::middleware([RoleMiddleware::class . ':freelance'])->group(function () {
        Route::get('/freelance/dashboard', function () {
            return view('freelance.dashboard');
        })->name('freelance.dashboard');
    });

    // Client routes
    Route::middleware([RoleMiddleware::class . ':client'])->group(function () {
        Route::get('/client/dashboard', [ClientController::class, 'dashboard'])->name('client.dashboard');
    });
});

require __DIR__ . '/auth.php';
