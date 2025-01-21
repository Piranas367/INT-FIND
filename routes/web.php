<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hallo', function () {
    return view('hallo');
});
Route::get('/search', [SearchController::class, 'index'])->name('search.index');







