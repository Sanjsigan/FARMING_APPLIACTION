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
Route::get('/Soil', function () {
    return view('Soil');
});
Route::get('/members', function () {
    return view('Members');
});
