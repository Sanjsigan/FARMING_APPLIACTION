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
Route::get('/soil', function () {
    return view('Soil');
});
Route::get('/members', function () {
    return view('Members');
});
Route::get('/addseeds', function () {
    return view('AddSeeds');
});
Route::get('/addpaddy', function () {
    return view('AddPaddy');
});
Route::get('/addfruits', function () {
    return view('AddFruits');
});
Route::get('/addvegetable', function () {
    return view('AddVegetable');
});
Route::get('/addtuber', function () {
    return view('AddTuber');
});