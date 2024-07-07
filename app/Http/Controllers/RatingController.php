<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Product;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    

    public function add(Request $request){

     $stars_rated = $request->get('product_rating');

     $product_id = $request->input('product_id');


     $product_check = Product::where('id',$product_id)->where('status','0')->first();

     if($product_check){

         $verified_purchased = Orders::where('orders.user_id', Auth::user()->id)
                             ->join('orders_items', 'orders.id', 'orders_items.order_id')
                             ->where('orders_items.product_id', $product_id)->get();


               if($verified_purchased->count() > 0){

             $existing_rating = Rating::where('user_id', Auth::id())->where('prod_id',$product_id)->first();

                if($existing_rating)
                {
                   $existing_rating->stars_rated = $stars_rated;

                   $existing_rating->update();
                }
                else
                {

                    Rating::create([
                        'user_id'=>Auth::id(),
                        'prod_id'=>$product_id,
                        'stars_rated'=> $stars_rated,
                 ]);

                }
                   return redirect()->back()->with('status', "Thank you for Rating this product");
               }
               else{
                return redirect()->back()->with('status', "You cannot Rate a without purchase!");
               }              
     }else{
        return redirect()->back()->with('status', "The link you followed was broken!");
     }
     
    }
}
