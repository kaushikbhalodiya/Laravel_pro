<?php

//use Illuminate\Support\Facades\Route;
//use Illuminate\Http\Request;

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

Route::get('/todos','TodoController@index');
Route::get('/todos/create','TodoController@create');
Route::get('/todos/edit','TodoController@edit');
Route::post('/todos/create','TodoController@store');





Route::get('/user','UserController@index');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/todos', 'TodoController@index')->name('todo');

Route::post('/upload', 'UserController@uploadavatar');
