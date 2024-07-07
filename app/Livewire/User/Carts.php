<?php

namespace App\Livewire\User;

use App\Models\Cart;
use Livewire\Component;

class Carts extends Component
{

    public $carts, $totalPrice = 0;



    public function decrementQuantity(int $cartId){

        $cartData = Cart::where('id',$cartId)->where('user_id', auth()->user()->id)->first();
        if($cartData)
        {
            if($cartData->quantity > 1){
    
                $cartData->decrement('quantity');
               

                return redirect()->route('view.cart')->with('success','The qunatity was updated successfully!');
            }else{

                return redirect()->route('view.cart')->with('error','The quantity must not be below 0');
            }
        }else{
    
            return redirect()->route('view.cart')->with('error','Something went wrong!');
            
        }


            
        
          
    }


    public function incrementQuantity(int $cartId){

          
        $cartData = Cart::where('id', $cartId)->where('user_id',auth()->user()->id)->first();

        if($cartData){

            if($cartData->Color()->where('id',$cartData->product_color_id)->exists()){

                $productColor = $cartData->Color()->where('id',$cartData->product_color_id)->first();


                if($productColor->quantity > $cartData->quantity){
                    $cartData->increment('quantity');

                    return redirect()->route('view.cart')->with('success','The qunatity was updated successfully!');
                    
                }else{
                    return redirect()->route('view.cart')->with('error','The qunatity is too much!');
                }

            }else{

                if($cartData->products->quantity > $cartData->quantity){
                    $cartData->increment('quantity');

                    return redirect()->route('view.cart')->with('success','The qunatity was updated successfully!');
                 }else{

                    return redirect()->route('view.cart')->with('error','The qunatity is too much!');
                 }

            }

            }
         else{
            return redirect()->back();
        }


    }


    public function render()
    {
        $carts = Cart::where('user_id', auth()->user()->id)->get();

        return view('livewire.user.carts',compact('carts'));
    }
}
