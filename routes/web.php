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

Route::group(['middleware' => ['Redirect']], function () {

Route::POST('home/save-new-post',[
	'uses'=>'Create@index',
	'as'=>'save_new_post'
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


Route::get('/detail/{id}', 'Details@index')->name('detail-page');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
