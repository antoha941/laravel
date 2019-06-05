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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home/addCar','CarsController@createCar');
    Route::get('/home/edit/{car}','CarsController@editCar');
    Route::get('/home/delete/{car}','CarsController@deleteCar');
    Route::post('/home/store','CarsController@store');
    Route::post('/home/edit/{car}','CarsController@updateCar');
});

Route::get('/car','CarsController@index');
Route::get('/car/{car}','CarsController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/listCar', 'HomeController@show')->name('home');
