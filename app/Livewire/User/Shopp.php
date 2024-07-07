<?php

namespace App\Livewire\User;

use App\Models\Product;
use Livewire\Component;


use Livewire\WithPagination;

class Shopp extends Component
{
    use WithPagination;
    public function render()
    {

        $products = Product::with('productImages')->where('status','0')->orderBy('created_at','DESC')->paginate(20);

        return view('livewire.user.shopp',compact('products'));
    }
}
