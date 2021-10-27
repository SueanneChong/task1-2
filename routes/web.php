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

Route::get('insert','App\Http\Controllers\StudInsertController@insertform');
Route::post('create','App\Http\Controllers\StudInsertController@insert');
Route::get('view-records','App\Http\Controllers\StudViewController@index');
Route::get('delete', 'App\Http\Controllers\StudViewController@delete');
Route::get('updateform', 'App\Http\Controllers\StudViewController@updateform');
Route::post('update/{name}', 'App\Http\Controllers\StudViewController@update');
