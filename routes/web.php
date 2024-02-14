<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts',[PostController::class,'allPosts'])->name('home');
Route::get('/spost/{id}',[PostController::class,'singlePost'])->name('single');
Route::get('/add',[PostController::class,'addPost'])->name('addpost');
Route::get('/add',[PostController::class,'addPost'])->name('addpost');
