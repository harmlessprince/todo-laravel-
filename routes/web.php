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

use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\Facades\Route;

Route::get('/', 'TodosController@index');

// Route::post('/store', 'TodosController@store');

Route::resource('todos', 'TodosController');