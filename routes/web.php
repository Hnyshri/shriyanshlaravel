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
Route::get('/my-signup', 'HomeController@signup');
Route::post('/my-signup', 'HomeController@postSignup')->name('my-signup1');

Route::get('/my-display', 'HomeController@displayRegistration')->name('my-display');

Route::get('/my-edit/{id}', 'HomeController@editRegistration')->name('my-edit');
Route::post('/my-update/{id}', 'HomeController@updateRegistration')->name('my-update');

Route::delete('/my-delete/{id}', 'HomeController@deleteRegistration')->name('my-delete');

Route::get('/ajaxdata', 'AjaxdataController@index')->name('ajaxdata');
Route::get('/ajaxdata/getdata', 'AjaxdataController@getdata')->name('ajaxdata.getdata');


Route::get('/my-fromMail', 'HomeController@fromMail')->name('fromMail');
Route::post('/my-mailContact', 'HomeController@mailContact')->name('mailContact');

Route::get('/my-map', 'HomeController@mapGoogle')->name('mapGoogle');

