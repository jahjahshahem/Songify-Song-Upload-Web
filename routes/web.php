<?php


use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [SongController::class, 'index'])->name('songs.index');

Route::resource('songs', SongController::class);

Route::fallback(function () {
    return redirect()->route('songs.index');
});
