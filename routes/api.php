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

Route::get("/todos", "TodosController@index");
Route::post("/todos", "TodosController@store");
Route::post("/todos/delete", "TodosController@delete");
Route::post("/todos/complete", "TodosController@complete");
