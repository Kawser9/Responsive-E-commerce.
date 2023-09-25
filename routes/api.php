<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/view/product/{id}',[ProductController::class,'productView']);
Route::post('/create/product',[ProductController::class,'productCreate']);

Route::post('/login',[UserController::class, 'login']);
Route::post('/registration',[UserController::class, 'registration']);

Route::group(['middleware'=>'auth:api'],function(){
    Route::get('/get/product',[ProductController::class,'getProduct']);
    Route::get('/logout',[UserController::class,'logout']);
});