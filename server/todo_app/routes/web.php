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

Route::get('todos', 'TodosController@index')->name('todos.index');
Route::post('todos', 'TodosController@store')->name('todos.store');
Route::put('todos/{id}', 'TodosController@update')->name('todos.update');
Route::get('todos/{id}', 'TodosController@show')->name('todos.show');
Route::delete('todos/{id}', 'TodosController@destroy')->name('todos.destroy');
Route::get('todos/create', 'TodosController@create')->name('todos.create');
Route::get('todos/{id}/edit', 'TodosController@edit')->name('todos.edit');
