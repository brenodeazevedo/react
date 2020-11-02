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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::post('auth/login', 'Api\\AuthController@login');
Route::post('auth/register', 'Api\\UserController@store');

Route::get('event/list', 'Api\\EventController@index');
Route::get('ticket/list', 'Api\\TicketEventController@index');

Route::group(['middleware' => ['apiJwt']], function (){
    Route::post('auth/me', 'Api\\AuthController@me');

    Route::get('users', 'Api\\UserController@index');
    Route::post('event/create', 'Api\\EventController@store');
    Route::post('ticket/create', 'Api\\TicketEventController@store');
});

