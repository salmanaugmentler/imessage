<?php

use App\Http\Controllers\InboxesController;
use App\Http\Controllers\MessageController;
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

//Retrieve Messages
Route::get('/message/fetch/{senderId}/{receiverId}',[MessageController::class,'index'])->name('fetch_message');

//Store Messages
Route::get('/message/store/{senderId}/{receiverId}/{message}',[MessageController::class,'store'])->name('store_message');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
