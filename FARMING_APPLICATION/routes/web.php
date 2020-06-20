<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('Home');
echo "yes its working";
  
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
Route::get('/', function () {
    return view('login');
});
Route::get('/profile', function () {
    return view('Profile');
});
Route::get('/signup', function () {
    return view('Signup');
});
Route::get('/viewfruits', function () {
    return view('ViewFruits');
});
Route::get('/viewpaddy', function () {
    return view('ViewPaddy');
});
Route::get('/viewtuber', function () {
    return view('ViewTuber');
});
Route::get('/ViewVegetable', function () {
    return view('viewvegetable');
});


Route::view('/signup', "Signup");
Route::view('/login', "login");

Route::get('/store', "UserController@store");
Route::post('/logs', "UserController@logs");



