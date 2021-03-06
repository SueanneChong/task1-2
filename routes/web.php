<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers\StudInsertController;
use Illuminate\Http\Controllers\StudViewController;


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

Route::get('insert', [StudInsertController::class, 'insertform']);
Route::post('create', [StudInsertController::class, 'insert']);
Route::get('view-records', [StudViewController::class, 'index']);
Route::get('delete', [StudViewController::class, 'delete']);
Route::get('updateform', [StudViewController::class, 'updateform']);
Route::post('update/{name}', [StudViewController::class, 'update']);
