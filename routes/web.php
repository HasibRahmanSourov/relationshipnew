<?php

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
    	
    $link = "<a href='/student'>Student List</a><br>";	
    return $link. "Welcome to Student management";
});

Route::resource('/student', 'StudentController');
Route::resource('/result', 'ResultController');
