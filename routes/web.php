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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', [
  'uses' => 'ImageController@show',
  'as' => 'image.form',
  'middleware' => 'auth'
]);

Route::get('/inscriptionok', [
  'uses' => 'UserController@createDays',
  'as' => 'home.form',
  'middleware' => 'auth'
]);

Route::post('/upload', [
  'uses' => 'ImageController@store',
  'as' => 'image.store',
  'middleware' => 'auth'
]);
