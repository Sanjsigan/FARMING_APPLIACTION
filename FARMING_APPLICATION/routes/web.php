<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('Home');
});
Route::get('/Seeds', function () {
    return view('Seeds');
});
