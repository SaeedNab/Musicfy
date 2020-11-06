<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
//Route::get('users',[UserController::class,'users']);
Route::post('login',[\App\Http\Controllers\api\UserController::class,'login'])->name('login');
//Route::get('login',[\App\Http\Controllers\api\UserController::class,'login']);
Route::post('register',[\App\Http\Controllers\api\UserController::class,'register'])->middleware('auth:api');;
Route::post('users',[\App\Http\Controllers\api\UserController::class,'users'])->middleware('auth:api');
Route::get('albums',[\App\Http\Controllers\api\AlbumController::class,'albums'])->middleware('auth:api');;
Route::get('artists',[\App\Http\Controllers\api\ArtistController::class,'artists'])->middleware('auth:api');;
Route::get('songs',[\App\Http\Controllers\api\SongController::class,'songs'])->middleware('auth:api');;
Route::get('logout',[\App\Http\Controllers\api\UserController::class,'logout'])->middleware('auth:api');;
