<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['middleware' => 'auth', 'uses' => 'UserController@login']);

//Process users
Route::get('login','UserController@login');
Route::post('login','UserController@processLogin');
Route::get('home',['middleware' => 'auth', 'uses' =>'UserController@home']);

//School routes

Route::get('schools',['middleware' => 'auth', 'uses' =>'SchoolController@index']);
Route::get('schools/add',['middleware' => 'auth', 'uses' =>'SchoolController@create']);
Route::post('schools/add',['middleware' => 'auth', 'uses' =>'SchoolController@store']);
Route::get('schools/edit/{id}',['middleware' => 'auth', 'uses' =>'SchoolController@edit']);
Route::post('schools/edit/update',['middleware' => 'auth', 'uses' =>'SchoolController@update']);
Route::get('schools/delete/{id}',['middleware' => 'auth', 'uses' =>'SchoolController@destroy']);
Route::get('schools-manage',['middleware' => 'auth', 'uses' =>'SchoolController@manage']);
Route::get('schools-reports',['middleware' => 'auth', 'uses' =>'SchoolController@schoolReports']);
Route::post('schools-search',['middleware' => 'auth', 'uses' =>'SchoolController@search']);
Route::get('schools/{id}',['middleware' => 'auth', 'uses' =>'SchoolController@show']);
Route::get('school/user/add/{id}',['middleware' => 'auth', 'uses' =>'SchoolController@addUser']);
Route::post('school/user/add',['middleware' => 'auth', 'uses' =>'SchoolController@saveUser']);
Route::post('school/user/edit',['middleware' => 'auth', 'uses' =>'SchoolController@updateUser']);
Route::get('school/user/edit/{id}',['middleware' => 'auth', 'uses' =>'SchoolController@showUserEdit']);

//Region and districts controller
Route::get('getDistricts/{id}',['middleware' => 'auth', 'uses' =>'RegionController@getDistricts']);

