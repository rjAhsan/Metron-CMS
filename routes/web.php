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

// HomePage Routes

Route::get('/','MetronController@index');

Route::get('/about','MetronController@about');
Route::get('/services','MetronController@services');

Route::get('/projects','MetronController@projects');
Route::get('/gallery','MetronController@gallery');
Route::get('/contactus','MetronController@contactus');
Route::get('/certefication','MetronController@certefication');


//These are Admin routes 


Auth::routes();

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
{
    
    
    
    Route::get('/dashboard','FirstController@dashboard');
    
    


    
    
    // Route::get('/gallery', function () {
    //     return view('Admin.pages.AdminGallery');
    // });
    
   
    
    // Route::get('/contact', function () {
    //     return view('Admin.pages.AdminContact');
    // });

    Route::get('/logo','LogoController@index');
    Route::post('/logoupdate','LogoController@update');
    Route::get('/header','HeaderController@index');
    Route::post('/editheader','HeaderController@update');
    Route::get('/slider','SliderController@index');
    Route::post('/addslider','SliderController@storebanner');
    Route::get('/{id}/delebaner','SliderController@destroy');
    // Route::get('/data','SliderController@data');
    Route::get('/About','AboutController@show');
    Route::post('/updatesection','AboutController@update');
    Route::get('/services','ServicesController@show');
    Route::post('/updateservices','ServicesController@update');
    Route::get('/{id}/deleservices','ServicesController@destroy');
    Route::post('/addcertification','CertificationController@create');
    Route::get('/certification','CertificationController@show');
    Route::get('/{id}/delecertification','CertificationController@destroy');
    Route::get('/catageroy','CatageroyController@show');
    Route::post('/addcatageroy','CatageroyController@create');
    Route::get('/{id}/delecatageroy','CatageroyController@destroy');
    Route::get('/projects','ProjectsController@show');
    Route::post('/addproject','ProjectsController@create');
    Route::get('/{id}/deleproject','ProjectsController@destroy');
    Route::get('/clients','ClientController@show');
    Route::post('/addclients','ClientController@create');
    Route::get('/{id}/deleclient','ClientController@destroy');
    Route::get('/homepage','FirstController@show');
    Route::post('/addhomeintro','FirstController@update');
    Route::get('/seo','FirstController@seo');
    
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');