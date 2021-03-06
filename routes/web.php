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
Route::get('/', 'PagesController@index');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('posts.search', 'PostsController@categorySearch');
Route::get('admin/routes','DashboardController@admin')->middleware('admin');

Route::get('posts.userposts', 'PostsController@userPosts');

Route::delete('user/{id}/delete',['middleware'=>['admin'],'uses'=>'DashboardController@destroy']);