<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');}
Route::view('/','welcome');
Route::view('home','home');
Route::view('login','login');
Route::view('register','register');
Route::view('employers_login','employers_login');
Route::view('employer_register','employer_register');
Route::view('job_list','job_list');
Route::view('add_job','add_job');
Route::view('admin_dash_board','admin_dash_board');

