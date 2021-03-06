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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create/ticket','TicketController@create');

Route::post('/create/ticket','TicketController@store');

Route::get('ticket/{id}/edit','TicketController@edit');

Route::post('ticket/{id}/update','TicketController@update');

Route::post('delete/ticket/{id}','TicketController@destroy');

Route::get('/tickets','TicketController@index');

