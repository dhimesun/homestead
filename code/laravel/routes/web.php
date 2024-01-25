<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class,'index'])
    ->name('index.posts');

Route::get('/posts/{id}', [PostController::class,'text'])
    ->name('text.posts')
    ->where('id','[0-9]+');

Route::get('/posts/create', [PostController::class,'create'])
    ->name('create.posts');

Route::post('/posts/store', [PostController::class,'store'])
    ->name('store.posts');

Route::get('/posts/{id}/edit', [PostController::class,'edit'])
    ->name('edit.posts')
    ->where('id','[0-9]+');

Route::patch('/posts/{id}/update', [PostController::class,'update'])
    ->name('update.posts')
    ->where('id','[0-9]+');

Route::delete('/posts/{id}/destroy', [PostController::class,'destroy'])
    ->name('destroy.posts')
    ->where('id','[0-9]+');
