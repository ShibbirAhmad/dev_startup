<?php

use Illuminate\Support\Facades\Route;

Route::post('api/backend/category/admin/login','Admin\AdminController@login');
  Route::get('api/check/session/admin','Admin\AdminController@sessionCheck');
 Route::group([
      'namespace' => 'Admin',
      'middleware' => 'admin'
            ],function(){

     Route::get('api/logout/admin','AdminController@logout');

     Route::get('api/get/category/list','CategoryController@get_category_list');
     Route::post('api/add/category','CategoryController@add_category');
     Route::get('api/get/edit/category/item/{id}','CategoryController@get_edit_category_item');
     Route::post('api/edit/category/{id}','CategoryController@edit_category');
     Route::get('api/de-active/category/{id}','CategoryController@deActive_category');
     Route::get('api/active/category/{id}','CategoryController@active_category');
     Route::get('api/delete/category/{id}','CategoryController@delete_category');

 });