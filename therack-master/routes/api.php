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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace'=>'backend'], function(){
    Route::get('api_product', 'ApiProductController@getAll');
    Route::get('api_product/{id}','ApiProductController@getProd');
    // Route::post('api_product', 'ApiProductController@createProd');
    // Route::put('api_product/{id}', 'ApiProductController@updateProd');
    // Route::delete('api_product/{id}', 'ApiProductController@deleteProd');

    Route::get('api_user', 'ApiUserController@getAll');
    Route::get('api_user/{id}','ApiUserController@getUser');
    Route::post('api_user', 'ApiUserController@createUser');

    Route::get('api_profile/{id}', 'ApiProfileController@getProfile');
    Route::put('api_profile/{id}', 'ApiProfileController@updateProfile');
    
    Route::get('api_checkout', 'ApiCheckoutController@getAll');
    Route::get('api_checkout/{id}','ApiCheckoutController@getOrder');
    Route::post('api_checkout', 'ApiCheckoutController@createUser');
});
Route::post('/login', 'Api\AuthController@login')->name('auth.login');

Route::group([
    'previx'=>'auth'
], function(){
    Route::post('/login', 'Api\AuthController@login')->name('auth.login');
    Route::post('/signup', 'Api\AuthController@signup')->name('auth.signup');

Route::group([
    'middleware'=>'auth:api'
], function(){
    Route::get('/logout', 'Api\AuthController@logout')->name('auth.logout');
    Route::get('/user', 'Api\AuthController@user')->name('auth.user');
    });   
});