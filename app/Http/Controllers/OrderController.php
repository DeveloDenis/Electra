<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Orders;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    
   public function view(){

    $orders = Orders::where('user_id', Auth::user()->id)->orderBy('created_at','DESC')->paginate(10);



    if(Auth::check()){
      $cartCount = Cart::where('user_id', auth()->user()->id);
      return view('user.orders',compact('orders','cartCount'));
    }else{

      return redirect()->route('user.menu');
    }

   }



   public function show($orderId){

    $order = Orders::where('user_id', Auth::user()->id)->where('id',$orderId)->first();

          if($order){

            if(Auth::check()){
              $cartCount = Cart::where('user_id', auth()->user()->id);
              return view('user.orders-view',compact('order','cartCount'));
            }else{
              return redirect()->route('user.menu');
            }
          }else{

            return redirect()->route('orders.view')->with('message','No order found');
          }
   }


    
}
