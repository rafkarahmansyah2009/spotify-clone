<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlaylistController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/library', [PlaylistController::class, 'index'])->name('library');

Route::get('/album', function () {
    return view('album-details');
})->name('album');

Route::post('/playlist', [PlaylistController::class, 'store'])->name('playlist.store');
Route::delete('/playlist/{playlist}', [PlaylistController::class, 'destroy'])->name('playlist.destroy');

