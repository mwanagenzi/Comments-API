<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CommentController;
use App\Models\Comment;
use Illuminate\Http\Request;
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
//
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
//Route::resource('comments', CommentController::class)->only([
//    'index','show'
//]);
Route::apiResource('comments', CommentController::class);

//Route::resource('comments',CommentController::class)->only([
//    'update','store','destroy'
//])->middleware('auth');

Route::get('/private', function () {
    return response()->json(['message' => 'Hello! You included a valid token with your request.']);
})->middleware('auth');
