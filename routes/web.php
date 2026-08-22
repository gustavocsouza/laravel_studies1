<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\OnlyAdmin;
use Illuminate\Support\Facades\Route;

Route::view('/','home');

Route::get('/param/{id}/{id2?}', function($id, $id2 = 1) {
    echo $id . $id2;
});


// Route param with constraints

Route::get('exp1/{value}', function($value) {
    echo $value;
})->where('value', '[0-9]+');

Route::get('exp2/{value}', function($value) {
    echo $value;
})->where('value', '[A-Za-z[0-9]+');


Route::get('exp3/{value}/{value2}', function($value, $value2) {
    echo $value . $value2;
})->where([
    'value' => '[A-Za-z[0-9]+',
    'value2' => '[0-9]+',
]);

// Route names
Route::get('/route_abc', function(){
    echo "Route with name";
})->name('route');

Route::get('/route_redirect', function() {
    return redirect()->route('route');
});

// Route groups
Route::prefix('admin')->group(function() {
    Route::get('/home', function() {
        echo "admin home";
    });
    Route::get('/about', function() {
        echo "admin about";
    });
});

// Route middlewares
Route::get('admin/only', function() {
    echo "Admin";
})->middleware([OnlyAdmin::class]);

Route::middleware([OnlyAdmin::class])->group(function() {
    Route::get('/home', function() {
        echo "admin home";
    });
    Route::get('/about', function() {
        echo "admin about";
    });
});

// Controller routes
Route::controller(UserController::class)->group(function() {
    Route::get('/user/new', 'new');
    Route::get('/user/edit', 'edit');
    Route::get('/user/delete', 'delete');
});

// fallback
Route::fallback(function() {
    echo "fallback not found 404";
});