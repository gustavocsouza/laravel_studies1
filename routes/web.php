<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::middleware('executa_antes')->group(function (){
    Route::get('/', [MainController::class, 'index'])->name('index');
    Route::get('/about', [MainController::class, 'about'])->name('about');
    Route::get('/contact', [MainController::class, 'contact'])->name('contact');
});


// Route::middleware([StartMiddleware::class])->group(function() {
//     Route::get('/', [MainController::class, 'index'])->name('index');
//     Route::get('/about', [MainController::class, 'about'])->name('about')->withoutMiddleware([StartMiddleware::class]);
//     Route::get('/contact', [MainController::class, 'contact'])->name('contact');
// });