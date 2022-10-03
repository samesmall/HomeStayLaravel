<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/about', function (){
    echo "<h1> about</h1>";
    return view('about');
});
Route::get('/facilities', function (){
    echo "<h1> facilities</h1>";
    return view('facilities');
});
Route::get('/contact', function (){
    echo "<h1> contact</h1>";
    return view('contact');
});
