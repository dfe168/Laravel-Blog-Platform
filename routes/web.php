<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;



Route::get('/blog', [PostController::class, 'index'])->name('post.index');
Route::get('/blog/{post:slug}', [PostController::class, 'show'])->name('post.show');
Route::get('/{numPosts?}', HomeController::class)->name('home');


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/admin', function () {
//         return;
//     })->name('dashboard');
// });
