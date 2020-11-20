<?php

use Illuminate\Support\Facades\Route;

 Route::group([ 'namespace' => 'Admin',  ],function(){

     Route::get('api/add/category','CategoryController@add_category');

 });