<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Test Routes
Route::get('/test', 'TestController@index')->name('test-index');

// User Routes
Route::get('/users', 'UserController@index')->name('users-index');
Route::get('/users/{user}', 'UserController@show');

// Post Routes
Route::get('/posts', 'PostController@index')->name('posts-all');
Route::get('/posts/{post}', 'PostController@show')->name('posts-show');
Route::post('/posts', 'PostController@store')->name('posts-create');
Route::put('/posts/{post}', 'PostController@update')->name('posts-update');
Route::delete('/posts/{post}', 'PostController@destroy')->name('posts-delete');
