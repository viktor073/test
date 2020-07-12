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
    return '!!!';
})->middleware('auth');

Route::get('/user/Id-{id}/{date?}/', function ($id, $date = null) {
    return $id." ".$date;
})->where(['id' => '[0-9]+', 'date' => '(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d']);

Route::get('/show/', 'TestController@show');

Route::get('/sum/{param2}/{param1}/', 'Test@sum')->where(['param2' => '[0-9]+', 'param1' => '[0-9]+']);

Route::get('/showOne/{id}/', 'Employee@showOne')->where(['id' => '[0-9]+']);

Route::get('/showField/{id}/{field}', 'Employee@showField')->where(['id' => '[0-9]+']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
