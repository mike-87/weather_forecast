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

Route::get('/', 'Weather_Controller@home');
Route::get('/json-view', 'Weather_Controller@jsonview');
Route::get('/widgets/today', 'Weather_Controller@widgets');