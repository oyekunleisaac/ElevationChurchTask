<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ViewController;

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


Route::get("data",[ViewController::class,'getData']); 
Route::post("register",[RegisterController::class,'register']); 
Route::post("login",[RegisterController::class,'login']); 
// Route::get('list',[App\Http\Controllers\Users::class,'list']);
// Route::post('register',[App\Http\Controllers\Users::class,'register']);
// Route::post('login',[App\Http\Controllers\Users::class,'login']);


