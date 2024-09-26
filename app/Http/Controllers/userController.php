<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function login(Request $request){
        $formFields=$request->validate([
                'name'=>'required',
                'password'=>'required',
        ]);

        Auth::attempt($formFields);
        if(Auth::check()){
            return redirect('/home');
        }else{
            return response('error');
        }
    }

    public function register(Request $request){
        $formFields=$request->validate([
                'name'=>'required|unique:users',
                'password'=>'required|confirmed'
        ]);

        $user=User::create($formFields);

        if($user){
            return redirect('/login');
        }else{
            return response('error');
        }
    }
}
