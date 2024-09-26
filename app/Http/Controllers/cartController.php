<?php

namespace App\Http\Controllers;

use App\Models\cartids;
use App\Models\carts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cartController extends Controller
{
    public function addToCart(Request $request, $id){
        $formFields=$request->validate([
             'mass'=>'required',
        ]);

        $cart= new carts();
        $cart->user_id=Auth::id();
        $cart->p_id =$id;
        $cart->cart_id=0;
        $cart->cart_mass=$formFields['mass'];
        $cart->status='pending';
        $cart->save();


        return redirect('/cart');
    }

    public function showCart(){
         $carts=carts::  //selectRaw("*,carts.cart_mass as abc")->//换名字的function
         join("fruits","fruits.id","=","carts.p_id")
        ->selectRaw("*, SUM(carts.cart_mass) as total_mass")
        ->where('user_id',Auth::id())
        ->where('status','pending')
        ->groupBy('carts.p_id')
        ->get();
        return view('cart',compact('carts'));
    }
    
    public function checkout(){
        $cartid=carts::selectRaw("MAX(cart_id) as id")->first();
        
        // if($cartid->id==null){
        //     $cartid->id=1;
        // }else{
        //     $cart_id=$cartid->id+1;
        // }
        // dd($cartid->id);

        $id = $cartid->id;
        $total_id = $id + 1;

        $carts=carts::where('user_id',Auth::id())->where("cart_id",0)->where("status","pending")
        ->update([
                "cart_id"=> $total_id,
                "status"=>"checkout",
        ]);

        if($carts){
            $newcartid=new cartids();
            $newcartid['id']=$total_id;
            $newcartid->save();
            return redirect('/home')->with('success','Order placed successfully');
        }
    }
}
