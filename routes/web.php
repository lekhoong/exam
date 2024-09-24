<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});

Route::post('/login',[userController::class,'login'])->name('login');

Route::get('/register',function(){
    return view('register');
});

Route::post('/register',[userController::class,'register'])->name('register');

Route::get('/home',function(){
    return view('home');
});
