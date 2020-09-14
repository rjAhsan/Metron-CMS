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

// Route::get('/', function () {
//     return view('Metron/LandingPage');
// });



Route::get('/', function () {
    return view('Metron.Home');
});

Route::get('/about', function () {
    return view('Metron.About');
});


Route::get('/services', function () {
    return view('Metron.Services');
});


Route::get('/projects', function () {
    return view('Metron.projects');
});

Route::get('/gallery', function () {
    return view('Metron.Gallery');
});

Route::get('/certefication', function () {
    return view('Metron.certefication');
});

Route::get('/c', function () {
    return view('Metron.contact');
});



