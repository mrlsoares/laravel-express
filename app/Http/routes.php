<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	$posts= \App\Post::all();
	return view('posts.index',compact('posts'));
    //return view('test.home');
});
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


Route::get('ola/{nome}','TestController@index');
Route::get('notas','TestController@notas');
Route::get('blog','PostsController@index');
/*
Route::get('admin/posts',       ['as'=>'admin.posts.index', 'uses'=>'PostAdminController@index']);
Route::get('admin/posts/create',['as'=>'admin.posts.create', 'uses'=>'PostAdminController@create']);//['as'=>'admin.posts.create','uses'=>'PostAdminController@create']
Route::post('admin/posts/store',['as'=>'admin.posts.store', 'uses'=>'PostAdminController@store']);
Route::get('admin/posts/edit/{id}', ['as'=>'admin.posts.edit', 'uses'=>'PostAdminController@edit']);
Route::put('admin/posts/update/{id}', ['as'=>'admin.posts.update', 'uses'=>'PostAdminController@update']);
Route::get('admin/posts/destroy/{id}', ['as'=>'admin.posts.destroy', 'uses'=>'PostAdminController@destroy']);*/

	Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

		Route::group(['prefix'=>'posts'],function(){
		Route::get('',       ['as'=>'admin.posts.index', 'uses'=>'PostAdminController@index']);
		Route::get('create',['as'=>'admin.posts.create', 'uses'=>'PostAdminController@create']);//['as'=>'admin.posts.create','uses'=>'PostAdminController@create']
		Route::post('store',['as'=>'admin.posts.store', 'uses'=>'PostAdminController@store']);
		Route::get('edit/{id}', ['as'=>'admin.posts.edit', 'uses'=>'PostAdminController@edit']);
		Route::put('update/{id}', ['as'=>'admin.posts.update', 'uses'=>'PostAdminController@update']);
		Route::get('destroy/{id}', ['as'=>'admin.posts.destroy', 'uses'=>'PostAdminController@destroy']);
	});
});