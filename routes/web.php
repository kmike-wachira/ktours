<?php

use Illuminate\Support\Facades\Route;
Route::post('/bookevent','bookingController@store')->name('booknow');
Route::get('/','EventsController@index')->name('home');
Route::get('/events/{id}','EventsController@show')->name('show');
Route::get('/bookevent/{id}','bookingController@show')->name('bookevent');
Route::get('/profile','profileController@create')->name('profile');

Route::get('/about', function () {
    return view('about');
});
Route::get('/admin', function () {
    return view('admin');
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
