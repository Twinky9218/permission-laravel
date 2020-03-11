<?php

use Illuminate\Support\Facades\Redis;
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



Route::get('/user', 'UserController@index')->name('user');

/*Route::group(['middleware' => ['auth']],function(){
 


});*/

Route::get('/user','UserController@index');

Route::get('/user/create','UserController@create');
Route::post('/user/store','UserController@store');
Route::get('/user/show/{id}','UserController@show');
Route::get('/user/edit/{id}','UserController@edit');
Route::post('/user/update/{id}','UserController@update');
Route::get('/user/delete/{id}','UserController@destroy');


//Route::resource('roles','RoleController');

Route::get('/roles','RoleController@index');
Route::get('/roles/create','RoleController@create');
Route::post('/roles/store','RoleController@store');
Route::get('/roles/show/{id}','RoleController@show');
Route::get('roles/edit/{id}','RoleController@edit');
Route::post('roles/update/{id}','RoleController@update');
Route::get('roles/delete/{id}','RoleController@destroy');	




Route::get('/create/ticket','TicketController@create');

Route::post('/create/ticket','TicketController@store');

Route::get('ticket/{id}/edit','TicketController@edit');

Route::post('ticket/{id}/update','TicketController@update');

Route::post('delete/ticket/{id}','TicketController@destroy');

Route::get('/tickets','TicketController@index');

Route::get('join-table','JoinTableController@index');

Route::get('test','TestingController@index');


//Route::get('/users','UsersController@index');

//Route::get('/create/users' ,'UsersController@create');

//Route::post('/create/users','UsersController@store');

