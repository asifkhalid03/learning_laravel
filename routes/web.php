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

//Route::get('usama', function () {
//    return view('welcome');
//});

//
//Route::get('with-out-controller', function ()
//{
//    return view('first_html_page');
//});
//
//Route::get('with-controller','htmlBodyController@mainPage');

//Route::get('car','htmlBodyController@getCars');

Route::get('calculator','calculatorController@main');

Route::post('sum','calculatorController@sum');

Route::post('sub','calculatorController@sub');

