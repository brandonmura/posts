<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function(){
    Route::resource('posts', PostController::class);
});

Route::get('/', function () {
    return redirect()->route('posts.index');
})->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
