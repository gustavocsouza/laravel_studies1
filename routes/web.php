<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\Main;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/init', [Main::class, 'init'])->name('init');
Route::get('/view', [Main::class, 'viewPage'])->name('view');

// route para single action controller
Route::get('/single', SingleActionController::class)->name('single');

// route para resource controller
Route::resource('users', UserController::class);

Route::resources([
    'clients' => ClientController::class,
    'products' => ProductController::class
]);
