<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    

    public function viewCheckout(){

        if(Auth::check()){
            $cartCount = Cart::where('user_id',auth()->user()->id);
            return view('user.checkout',compact('cartCount'));
           }
           else{
            return redirect()->route('user.home');
           }

        
    }


    public function tanks(){

        if(Auth::check()){
            $cartCount = Cart::where('user_id', auth()->user()->id);
            return view('user.thank-you',compact('cartCount'));
        }else{
            return redirect()->route('user.home');
        }

        
    }
}
