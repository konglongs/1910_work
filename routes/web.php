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

Route::get('/user/reg','User\UserController@reg');
Route::post('/user/regs','User\UserController@regs');
Route::get('/user/login','User\UserController@login');
Route::post('/user/logins','User\UserController@logins');
Route::get('/user/list','User\UserController@list');
Route::get('/user/test','User\UserController@test');


