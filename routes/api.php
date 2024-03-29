<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
<<<<<<< HEAD

Route::get('/post', 'PostController@index');
Route::get('/post/{id}', 'PostController@show');
Route::post('/post', 'PostController@store');
Route::put('/post/{post}', 'PostController@update');
Route::delete('/post/{post}', 'PostController@destroy');
=======
Route::get('/post','PostController@index'); // index->list
Route::get('/post/{id}', 'PostController@show'); // show->detail
Route::post('/post','PostController@store');//store->create
Route::put('/post/{post}', 'PostController@update'); // update
Route::delete('/post/{post}', 'PostController@destroy'); // destroy


>>>>>>> feat/4364914
