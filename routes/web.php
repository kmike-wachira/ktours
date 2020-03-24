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
Route::redirect('booking','bookingController');
Route::post('/bookevent','bookingController@store')->name('booknow');
Route::get('/','EventsController@index')->name('home');
Route::get('/events/{id}','EventsController@show')->name('show');
Route::get('/bookevent/{id}','bookingController@show')->name('bookevent');


Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/laravel', function () {
//     return view('welcome');
// });

Route::get('/events','EventsController@allEvents')->name('allevents');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
