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

Route::get('/','EventsController@index');
Route::get('/events/{id}','EventsController@show')->name('show');

// Route::get('/events', function () {
//     return view('events');
// });
Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/laravel', function () {
//     return view('welcome');
// });

Route::get('/events','EventsController@allEvents');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
