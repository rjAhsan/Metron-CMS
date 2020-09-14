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
//     return view('Metron/Main');
// });



Route::get('/dashboard', function () {
    return view('Admin.Dashboard');
});


Route::get('/logo', function () {
    return view('Admin.logo');
});

Route::get('/slider', function () {
    return view('Admin.Slider');
});

Route::get('/header', function () {
    return view('Admin.topheader');
});


Route::get('/homepage', function () {
    return view('Admin.pages.AdminHome');
});

Route::get('/services', function () {
    return view('Admin.pages.AdminServices');
});

Route::get('/projects', function () {
    return view('Admin.pages.AdminProjects');
});

Route::get('/gallery', function () {
    return view('Admin.pages.AdminGallery');
});

Route::get('/About', function () {
    return view('Admin.pages.AdminAbout');
});

Route::get('/certification', function () {
    return view('Admin.pages.AdminCertification');
});

Route::get('/contact', function () {
    return view('Admin.pages.AdminContact');
});



