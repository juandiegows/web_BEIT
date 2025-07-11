<?php

use App\Models\Services;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    $services = Services::where('is_active', true)
        ->orderBy('name')
        ->get();
    return view('welcome', compact('services'));
})->name('home');

Route::get('/servicios', function () {
    $services = Services::where('is_active', true)
        ->orderBy('name')
        ->get();
    return view('servicios', compact('services'));
})->name('servicios');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/proyectos', function () {
    return view('proyectos');
})->name('proyectos');

Route::get('/contacto', [App\Http\Controllers\ContactController::class, 'show'])->name('contacto');
Route::post('/contacto', [App\Http\Controllers\ContactController::class, 'send'])->name('contacto.send');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
