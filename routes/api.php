<?php

use App\Http\Controllers\CustomerServiceController;
use App\Http\Controllers\DetailsPlaceController;
use App\Http\Controllers\DivideController;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Authenticate
Route::controller(UserController::class, )->group(function ()  {
    //register
Route::post("register","register");
Route::post("login","login");
Route::post("logout","logout");
Route::post("forgotPassword","forgotPassword");
Route::post("restPassword","restPassword");
Route::post("newPassword","newPassword");
//proflie
Route::post("updatePassword","updatePassword");
Route::put("updateProflie","updateProflie");
//delete acc
Route::delete("delete/{id}","delete");
// Route::get("proflie ","proflie");




});