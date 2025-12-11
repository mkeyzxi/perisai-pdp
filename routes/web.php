<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\KonstruksiController;

//  Beranda dan Login ueh
Route::get('/', [AuthController::class, 'loginPage'])->name('login');
Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard berdasarkan role
Route::middleware(['auth', 'role:admin'])->get('/admin/dashboard', function () {
    return "Dashboard Admin";
})->name('admin.dashboard');

Route::middleware(['auth', 'role:akuntansi'])->get('/akuntansi/dashboard', function () {
    return "Dashboard Akuntansi";
})->name('akuntansi.dashboard');

Route::middleware(['auth', 'role:konstruksi'])->group(function () {
    Route::get('/konstruksi/dashboard', [KonstruksiController::class, 'dashboard'])
        ->name('konstruksi.dashboard');
});

// Admin – Material entar
// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin/material/upload', [MaterialController::class, 'upload'])
//         ->name('admin.material.upload');

//     Route::post('/admin/material/store', [MaterialController::class, 'store'])
//         ->name('admin.material.store');
// });


// // Akuntansi – Material
// Route::middleware(['auth', 'role:akuntansi'])->group(function () {
//     Route::get('/akuntansi/material/upload', [MaterialController::class, 'upload'])
//         ->name('akuntansi.material.upload');

//     Route::post('/akuntansi/material/store', [MaterialController::class, 'store'])
//         ->name('akuntansi.material.store');
// });


// // Konstruksi – Material
// Route::middleware(['auth', 'role:konstruksi'])->group(function () {
//     Route::get('/konstruksi/material/upload', [MaterialController::class, 'upload'])
//         ->name('konstruksi.material.upload');

//     Route::post('/konstruksi/material/store', [MaterialController::class, 'store'])
//         ->name('konstruksi.material.store');

//     // API untuk auto-fill data
//     Route::get(
//         '/konstruksi/material/project/{id}',
//         [MaterialController::class, 'getProjectData']
//     );
// });

// Konstruksi – Material
Route::middleware(['auth', 'role:konstruksi'])->group(function () {

    // Halaman form input material
    Route::get('/konstruksi/material/upload', [MaterialController::class, 'upload'])
        ->name('konstruksi.material.upload');

    // Simpan material
    Route::post('/konstruksi/material/store', [MaterialController::class, 'store'])
        ->name('konstruksi.material.store');

    // API untuk auto-fill berdasarkan project
    Route::get('/konstruksi/material/project/{id}',
        [MaterialController::class, 'getProjectData']
    );
});


// Testing
Route::get('/sidebar', function () {
    return view('home');
});
