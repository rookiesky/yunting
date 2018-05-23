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

Route::get('/user/action','VerifyController@index');
Route::get('/email/verify/resetSendEmail','VerifyController@resetSendRegEmail');
Route::get('/email/verify/{token}','VerifyController@email')->name('email.verify');

Route::get('/reptile','ReptileController@star');

include_once 'voice.php';