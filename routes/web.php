<?php

use App\Http\Controllers\Main;
use Illuminate\Support\Facades\Route;

Route::get('/init', [Main::class, 'init'])->name('init');
Route::get('/view', [Main::class, 'viewPage'])->name('view');