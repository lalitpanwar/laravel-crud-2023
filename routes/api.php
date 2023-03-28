<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\HttpControllerApi;

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

Route::get('returndata',[ApiController::class,'index']);
Route::get('apigetdata/{id?}',[ApiController::class,'apiGetData']);
Route::post('insertapi',[ApiController::class,'insertDataApi']);
Route::put('updateapi',[ApiController::class,'UpdateApiData']);
Route::delete('deleteapi',[ApiController::class,'DeleteApiData']);
Route::post('uploadapi',[ApiController::class,'uploadApiFile']);
Route::get('getdataurl',[HttpControllerApi::class,'getDataApiURL']);
