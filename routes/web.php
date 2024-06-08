<?php

use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SecretaryController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard', 301);

Route::middleware(['auth'])->group(function () {
    Route::resource('consultations', ConsultationController::class);
    Route::resource('patients', PatientController::class);
    Route::resource('secretaries', SecretaryController::class);
    Route::resource('doctors', DoctorController::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
