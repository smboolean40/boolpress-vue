<?php

use App\Category;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// http://localhost:8000/api/posts
Route::namespace('Api')->name('api.')->group(function() {

	Route::get('/posts', 'PostController@index');
	Route::get('/posts/{slug}', 'PostController@show');

	Route::get('/categories/{slug}', 'CategoryController@show');

});