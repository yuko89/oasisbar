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
    return view('home');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/service', function () {
    return view('service');
    
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', 'ContactController@send_mail');

Route::get('/access', function () {
    return view('access');
});

Route::get('/recruit', function () {
    return view('recruit');
});

Route::get('/reserve', function () {
    return view('reserve');
});

Route::post('/reserve', 'ReserveController@send_mail');