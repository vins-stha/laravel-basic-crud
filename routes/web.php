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
    return view('welcome');
});
Route::get('/public/', function () {
    return view('welcome');
});
Route::view('aboutus','aboutus');

Route::get('user/','user@index');
Route::get('user/index','user@index');
Route::get('user/add/','user@add');
Route::get('user/delete/','user@delete');

Route::post('register','User@register');
Route::view('signup','signup');


Route::get('nations/', 'NationController@index');
Route::get('nations/create/','NationController@create');
Route::post('nations/submit/','NationController@store');

Route::get('nations/edit/{id}','NationController@edit');
Route::post('nations/update/{id}','NationController@update');
Route::post('nations/update/{id}','NationController@update')->name('nations.update');



Route::get('nations/delete/{id}', 'NationController@destroy');


