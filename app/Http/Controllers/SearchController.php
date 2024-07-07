<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{

    

    public function search(Request $request){

       if($request->has('search')){


        $searchProducts = Product::where('name','like','%'.$request->get('search').'%')->latest()->paginate(15);


        if(Auth::check()){
            $cartCount = Cart::where('user_id',auth()->user()->id);
            return view('user.search-product',compact('cartCount','searchProducts'));
           } 
           else{
            return view('user.search-product',compact('searchProducts'));
           }
        
       }else{

        return redirect()->back()->with('message','Empty Search');

       }
    }
}
