<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutusController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about_us', [aboutusController::class, 'index'])->name('about_us');




