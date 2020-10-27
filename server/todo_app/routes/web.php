<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', 'AuthController@home');

// Registration and User Profile
Route::resource('users', 'UserController', ['except' => ['index', 'show', 'destroy']]);

Auth::routes();

// ToDo
Route::get('/todo', 'TodoController@index');

Route::get('/create-todo', 'TodoController@createPage');
Route::get('/edit-todo/{id}', 'TodoController@editPage');
Route::get('/delete-todo/{id}', 'TodoController@deletePage');

Route::post('/create', 'TodoController@create');
Route::post('/edit', 'TodoController@edit');
Route::post('/delete/{id}', 'TodoController@delete');


// show phpinfo
Route::get('phpinfo', function(){
    return phpinfo();
});
