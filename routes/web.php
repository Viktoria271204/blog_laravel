<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PostController::class, "index"])->name('index');
Route::get('/addpost', [PostController::class, "add"])->name('add');
Route::post('/addpost', [PostController::class, "addpost"])->name('addpost');
Route::get('/single/{post}', [PostController::class, "single"])->name('single');
Route::get('/userpost', [PostController::class, "user_post"])->name('userpost');
Route::get('/blocked', [PostController::class, "blocked"])->name('blocked');
Route::post('/register', [UserController::class, "register"])->name('register');
Route::post('/auth', [UserController::class, "auth"])->name('auth');
Route::get('/logout', [UserController::class, "logout"])->name('logout');
Route::post('/single/{post}', [CommentController::class, "addcomment"])->name('addcomment');
Route::get('/editpost/{post}', [PostController::class, "edit"])->name('edit');
Route::post('/editpost/{post}', [PostController::class, "editpost"])->name('update');