<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\User\DonateController;

Route::view('/', 'home.index')->name('home');

Route::redirect('/home', '/', 301);

Route::get('/test', TestController::class)->name('test')->middleware('token:secret');


Route::middleware('guest')->group(function(){
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login.store');
});


Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::post('blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');


Route::get('user/donates', [DonateController::class, 'index'])->name('user.donates');


// Route::fallback(function () {
//     return 'Fallback';
// });
