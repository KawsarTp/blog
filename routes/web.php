<?php

// use App\User;

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
// Route::get('/',function(){
// 	dd(app('Example'));
// });

Route::resource('projects','ProjectController');
Route::patch('task/{task}','TaskController@update')->name('task.update');
Route::get('task/login','TaskController@login')->name('task.login');
Route::post('task/login','TaskController@loginpro');
Route::post('task/logout/{id}','ProjectController@logout')->name('projects.logout');
Route::post('addcomment','ProjectController@addComment')->name('addComment');


Route::group(['prefix'=>'admin'],function(){

   Route::get('login','AdminController@login')->name('login');
   Route::post('login','AdminController@loginProcess');

   Route::get('register','AdminController@register')->name('register');
   Route::post('register','AdminController@store');

   Route::get('home','AdminController@home')->name('home');

   Route::post('logout','AdminController@logout')->name('logout');

   Route::get('tag','TagController@tag')->name('tag');
   Route::post('tag','TagController@store');

   Route::get('userlist','AdminWorkController@viewUser')->name('userlist');

   Route::get('posts','AdminWorkController@viewPost')->name('posts');

});