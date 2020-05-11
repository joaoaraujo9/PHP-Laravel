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


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/home/store', 'HomeController@store');
Route::get('/home/delete/{id}', array('as' => 'delete', 'uses' => 'HomeController@delete'));

//Route::get('/password/reset/{token}', 'ResetPasswordController@reset');
Route::post('/password/reset', 'Auth\ResetPasswordController@postCredentials');

    

