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

// Route::get('/', function () {
//     return view('login');
// }); --> EXEMPLO


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/results', 'ResultsController@index')->name('results');
Route::get('/myvehicles', 'MyVehiclesController@index')->name('myvehicles');



// Search Routes 

Route::get('/search', 'SearchController@index');
Route::post('/products/{product}', 'SearchController@store');

// Product Routes

Route::post('/product', 'ProductController@index');
Route::post('/product', 'ProductController@store');

