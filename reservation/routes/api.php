<?php

use App\Http\Controllers\AirlaneController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/flights',[FlightController::class,'index']);
Route::get('/flights',[FlightController::class,'show']);
Route::put('/flights',[FlightController::class,'update']);
Route::post('/flights',[FlightController::class,'store']);
Route::delete('/flights',[FlightController::class,'destroy']);
Route::get('/users',[UserController::class,'index']);
Route::get('/users/{user}',[UserController::class,'show']);
Route::put('/users',[UserController::class,'update']);
Route::post('/users',[UserController::class,'store']);
Route::delete('/users/{user}',[UserController::class,'destroy']);
Route::get('/airlanes',[AirlaneController::class,'index']);
Route::get('/',[FlightController::class,'show']);
Route::put('/flights',[FlightController::class,'update']);
Route::post('/flights',[FlightController::class,'store']);
Route::delete('/flights',[FlightController::class,'destroy']);
Route::get('/users',[UserController::class,'index']);
