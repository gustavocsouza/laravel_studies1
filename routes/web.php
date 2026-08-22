<?php

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