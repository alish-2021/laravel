<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostsController;

Route::get('/', [PageController::class,"blogPage"])->name('home');
Route::get('/post/{id}', [PageController::class, "postPage"]);
Route::post('/post', [PostsController::class, "store"]);
Route::post('/post/delete', [PostsController::class, "destroy"]); 
Route::get('/post/{id}/update', [PageController::class, "postUpdate"]);
Route::post('/post/update', [PostsController::class, "update"]);
