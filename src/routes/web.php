<?php

use Illuminate\Http\Request; 
Route::group(['middleware' => ['web']] ,function(){

Route::resource('/todolist','Gunaraj\Todolist\Http\Controllers\TodolistController');
});