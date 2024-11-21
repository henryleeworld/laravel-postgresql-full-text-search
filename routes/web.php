<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('posts-lists', [PostsController::class, 'index'])->name('posts-lists');
