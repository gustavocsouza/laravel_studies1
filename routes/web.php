<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home');

Route::get('/param/{id}/{id2?}', function($id, $id2 = 1) {
    echo $id . $id2;
});
