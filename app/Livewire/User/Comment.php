<?php

namespace App\Livewire\User;

use App\Models\Comment as ModelsComment;
use App\Models\Orders;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Comment extends Component
{

    use WithPagination;
     

     public $product, $user, $comment ;


     public function createNewComment(){



          

       $validated = $this->validate([
           'comment'=>'required',
        ]);

        
       $productCheck = Product::where('id',$this->product->id)->where('status','0')->first();

        if($productCheck){

            $product_id = $this->product->id;

            $verified_purchased = Orders::where('orders.user_id', Auth::user()->id)
            ->join('orders_items', 'orders.id', 'orders_items.order_id')
            ->where('orders_items.product_id', $product_id)->get();

           if($verified_purchased->count() > 0){

            ModelsComment::create([
                'content'=>$this->comment,
                'user_id'=>$this->user,
                'product_id'=>$this->product->id,
           ]);

           }else{
            request()->session()->flash('danger','To write a review you must to purchase this product!');
           }

            

        }else{

            request()->session()->flash('danger','The link you followed was broken!');
        }

        
     }



    public function  deleteComment($comment_id){


        $comment_id1 = ModelsComment::find($comment_id);

        if($comment_id1){

            $comment_id1->delete();

            

        }
    }
    

     

    public function render()
    {

       $comments = ModelsComment::with('user')->where('product_id',$this->product->id);
         
        return view('livewire.user.comment',[
            'product'=>$this->product,
             'user'=>$this->user,
             'comments'=>$comments->paginate(5),
        ]);
    }
}
