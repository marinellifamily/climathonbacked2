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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('me', 'AuthController@me');
    Route::post('register', 'AuthController@register');

});


Route::resource('laws', 'LawsController');
Route::post('laws/{law}/delete', 'LawsController@destroy');

Route::resource('activities', 'ActivitiesController');
Route::resource('orders', 'OrdersController');
Route::resource('reports', 'ReportsController');
Route::resource('proposals', 'ProposalsController');
