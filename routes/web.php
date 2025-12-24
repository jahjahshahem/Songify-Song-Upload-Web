<?php


use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SongController::class, 'index'])->name('songs.index');


Route::resource('songs', SongController::class);
