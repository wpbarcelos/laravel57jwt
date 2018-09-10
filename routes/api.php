<?php

use Illuminate\Http\Request;

Route::group(['prefix' => 'auth'], function ($router) {
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});
Route::post('/auth/login', 'AuthController@login');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
