<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'index']);


Route::resource('post', PostController::class)->except('index');
/* Route::inertia('/', 'Home');
 */