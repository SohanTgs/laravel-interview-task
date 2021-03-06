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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[
	'uses'=>'Homepage@index',
	'as'>'index'
]);

		//start middleware syntax

Route::group(['middleware' => ['Redirect']], function () { 

Route::POST('home/create-new-post',[
	'uses'=>'Create@create_new_post',
	'as'=>'create_new_post'
]);

Route::get('home/manage-details',[
	'uses'=>'Details@manage_details',
	'as'=>'manage_details'
]);

Route::get('/unpublished_status/{id}',[
	'uses'=>'Details@unpublished_status',
	'as'=>'unpublished_status'
]);

Route::get('/published_status/{id}',[
	'uses'=>'Details@published_status',
	'as'=>'published_status'
]);

Route::get('/delete_post/{id}',[
	'uses'=>'Details@delete_post',
	'as'=>'delete_post'
]);

});
		// end middleware syntax

Route::get('/task-directions',[
	'uses'=>'Homepage@task_directions',
	'as'=>'task_directions'
]);

Route::get('/detail/{id}',[
	'uses'=>'Details@detail',
	'as'=>'detail'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
