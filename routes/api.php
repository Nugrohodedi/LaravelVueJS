<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// menambahkan route untuk person

// get data
Route::get('/person','PersonController@all');

// get data by id
Route::get('/person/{id}','PersonController@show');

// add data
Route::post('/person','PersonController@store');

// update data
Route::put('/person/{id}','PersonController@update');

// delete data
Route::delete('/person/{id}','PersonController@delete');