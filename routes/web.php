<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/ref-reactive', [App\Http\Controllers\RefReactiveController::class, 'index'])->name('ref.reactive');

Route::get('/computed-method', [App\Http\Controllers\ComputedMethodController::class, 'index'])->name('computed.method');

Route::get('/built-directive', [App\Http\Controllers\BuiltDirectiveController::class, 'index'])->name('built.directive');

Route::get('/watchers', [App\Http\Controllers\WatchersController::class, 'index'])->name('watchers');

Route::get('/component-prop-event', [App\Http\Controllers\ComponentPropEventController::class, 'index'])->name('component.prop.event');





Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
