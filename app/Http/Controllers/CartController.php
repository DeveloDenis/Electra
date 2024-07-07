<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CartController extends Controller
{
    public function viewCart(){

        $cartCount = Cart::where('user_id',auth()->user()->id);

       
        $carts = Cart::where('user_id', auth()->user()->id)->get();

        return view('user.cart',compact('cartCount','carts'));
    }


    public function deleteCart(Cart $cart, User $user){

        if(!Gate::allows('user.edit',$user)){
            abort(404);
        }
                
        


        $cart->delete();

        return redirect()->back()->with('success','The product was successfully deleted from cart!');
    }
}
