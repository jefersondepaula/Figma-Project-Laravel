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

Route::get('/', function () {
    return view('intro');
})->name('intro');

//authenticatae and login routes
Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/login','Auth\LoginController@authenticate');

Route::get('/register', 'Auth\RegisterController@index')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/logout','Auth\LoginController@logout');

//show pages routes
Route::get('/', function () {
    return view('intro');
})->name('intro');

Route::get('/profile', function(){
    return view('/profile');
})->name('profile')->middleware('auth');

Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware('auth');

Route::get('/video-gallery', function(){
    return view('video-gallery');
})->middleware('auth');

Route::get('/following', function(){
    return view('following');
})->middleware('auth');

