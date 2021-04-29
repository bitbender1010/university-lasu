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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/computer-science/100/dashboard', function () {
    return view('computer-science/100/dashboard');
});

Route::get('/computer-science/100/CSC120/coursecontent', function () {
    return view('computer-science/100/CSC120/coursecontent');
});

//course details
Route::get('/computer-science/100/CSC120/1/coursedetails', function () {
    return view('computer-science/100/CSC120/1/coursedetails');
});

//video routes
Route::get('/computer-science/100/CSC120/1/video-one', function () {
    return view('computer-science/100/CSC120/1/video-one');
});


