<?php

namespace App\Livewire\User;

use App\Mail\InvoiceOrderMailable;
use App\Mail\PlaceOrderMailable;
use App\Models\Cart;
use App\Models\OrderItems;
use App\Models\Orders;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;

class Checkout extends Component
{
   
    public $carts, $totalProductAmount = 0;

    public $fullname, $email, $phone, $pincode, $country, $city, $street, $payment_mode = NULL, $payment_id = NULL;

    
    protected $listeners = [
          'validationForAll',
          'paidOnlineOrder'
    ];


    public function paidOnlineOrder($value){

        $this->payment_id = $value;
        $this->payment_mode = 'Paid by Paypal';

        $codOrder = $this->placeOrder();

        if($codOrder){
            

            try{
                Cart::where('user_id', auth()->user()->id)->delete();

            

                    $order = Orders::findOrFail($codOrder->id);

                    Mail::to("$order->email")->send(new PlaceOrderMailable($order));

                    request()->session()->flash('success','Order Placed Successfully!');

                return redirect()->route('thank-you');
            }catch(\Exception $e){
                request()->session()->flash('success','Something went wrong!');
            }

            
        }else{
            request()->session()->flash('error','Something went wrong!');
        }

    }


    public function validationForAll(){

        $this->validate();
    }

    

    public function rules(){

        return[
            'fullname'=>'required|string|max:121',
            'email'=>'required|email|max:121',
            'phone'=>'required|max:11|min:10',
            'pincode'=>'required|string|max:6|min:6',
            'country'=>'required',
            'city'=>'required|max:75',
            'street'=>'required|max:75',
        ];


        

            
        
    }


    public function placeOrder(){

         $this->validate();
              
            $order = Orders::create([

                'user_id'=>auth()->user()->id,
                'tracking_no'=>'electra-'.Str::random(10),
                'fullname'=>$this->fullname,
                'email'=>$this->email,
                'phone'=>$this->phone,
                'pincode'=>$this->pincode,
                'country'=>$this->country,
                'city'=>$this->city,
                'street'=>$this->street,
                'status_message'=>'in progress',
                'payment_mode'=>$this->payment_mode,
                'payment_id'=>$this->payment_id,
            ]);

            foreach($this->carts as $cartItem){

                $orderItems = OrderItems::create([
                   'order_id'=>$order->id,
                   'product_id'=>$cartItem->product_id,
                   'product_color_id'=>$cartItem->product_color_id,
                   'quantity'=>$cartItem->quantity,
                   'price'=>$cartItem->products->selling_price+$cartItem->products->shipping_price,
                ]);

                if($cartItem->product_color_id != NULL){


                    $cartItem->Color()->where('id',$cartItem->product_color_id)->decrement('quantity',$cartItem->quantity);
                }else{

                    $cartItem->products()->where('id',$cartItem->product_id)->decrement('quantity',$cartItem->quantity);

                }
            }


            return $order;

        }


        public function codOrder(){

            $this->payment_mode = 'Cash on Delivery';
            $codOrder = $this->placeOrder();

            if($codOrder){


                try{
                Cart::where('user_id', auth()->user()->id)->delete();

            

                    $order = Orders::findOrFail($codOrder->id);

                    Mail::to("$order->email")->send(new PlaceOrderMailable($order));

                    request()->session()->flash('success','Order Placed Successfully!');

                return redirect()->route('thank-you');
            }catch(\Exception $e){
                request()->session()->flash('success','Something went wrong!');
            }

                

                
            }else{
                request()->session()->flash('error','Something went wrong!');
            }

        }

        
        public function totalProductAmount(){

            $this->totalProductAmount = 0;

            $this->carts = Cart::where('user_id', auth()->user()->id)->get();

            

            foreach($this->carts as $cartItem){

                $this->totalProductAmount += $cartItem->products->selling_price*$cartItem->quantity+$cartItem->products->shipping_price;


            }

            return $this->totalProductAmount;
        }
   
    public function render()
    {

       $this->fullname = auth()->user()->name;
  
       $this->email = auth()->user()->email;
       
       if(auth()->user()->phone){
           
           $this->phone = auth()->user()->phone;
           
       }else{
           
             $this->phone;
           
       }

       

       $this->pincode ;

       $this->country;

       $this->city;

       $this->street;

       $this->totalProductAmount = $this->totalProductAmount();

    

        return view('livewire.user.checkout',[
            'totalProductAmount'=>$this->totalProductAmount,
        ]);
    }
}
