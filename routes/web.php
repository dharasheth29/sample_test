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
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register')->middleware('age');

Route::get('home', 'HomeController@index')->name('home');

Route::post('guestlogin', 'GuestLoginController@store')->name('guestlogin')->middleware('age');
Route::get('redirecttoerror', 'GuestLoginController@redirectToError');
