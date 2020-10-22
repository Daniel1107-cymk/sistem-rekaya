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

Route::apiResource('paket', '\App\Http\Controllers\API\PaketController')->except('show');
Route::apiResource('sekolah', '\App\Http\Controllers\API\SekolahController')->except('show');
Route::apiResource('siswa', '\App\Http\Controllers\API\SiswaController')->except('show');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
