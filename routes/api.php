<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register', [UserController::class, "register"]);
Route::post('/addpost', [PostController::class, "addpost"]);
Route::post('/editpost/{post}', [PostController::class, "editpost"]);
Route::delete('/deletepost/{post}', [PostController::class, "deletepost"]);
Route::post('/addcomment', [CommentController::class, "addcomment"]);
Route::post('/like', [LikeController::class, "like"]);