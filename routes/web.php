<?php

use App\Http\Controllers\userController;
use App\Models\fruits;
use Illuminate\Support\Facades\Auth;
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
    $fruits=fruits::all();
    return view('home',compact('fruits'));
});

Route::get('/details/{id}',function($id){
    $fruits=fruits::find($id);
    return view('details',compact('fruits'));
})->name('details');

Route::get('/logout',function(){
    Auth::logout();
    return redirect('/login');
})->name('logout');


