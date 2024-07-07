<div>
    
    <div class="my-5">
        Electra
     </div>
    <div class="">
        <h4>My Cart</h4>
    </div>
    
    @if(session()->has('success'))
                              
                          <div class="alert alert-success alert-dismissible fade show">
                            {{session('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
    
    
                          @endif

                          @if(session()->has('error'))
                              
                          <div class="alert alert-danger alert-dismissible fade show">
                            {{session('error')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
    
    
                          @endif 
     @if($carts->count() > 0)
    <div class="small-container cart-page">
    
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Product Color</th>
                <th>Shipping Price</th>
                <th>Total</th>
            </tr>
    
            
               @foreach($carts as $cart)
            <tr>
                <td>
                    <div class="cart-info">
                        @if($cart->products->productImages->count() > 0)
                        <img src="{{asset($cart->products->productImages[0]->image)}}" alt="">
    
                        @else
    
                        @endif
                        <div>
                            <a class="h5" href="{{route('view.product',$cart->products->id)}}">{{$cart->products->name}}</a><br/>
                            <small>Price: ${{$cart->products->selling_price}}.00</small>
                            <br>
                            <form  action="{{route('delete.cart',$cart->id)}}" method="post"> 
                              @csrf
                              @method('delete')
                            <button onclick="return confirm('Are you sure you want to delete this product from cart?')" type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i>Remove</button>
    
                            </form>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                      <button type="button" wire:loading.attr="disabled"  wire:click="decrementQuantity({{$cart->id}})" class="btn btn1"><i class="fa fa-minus"></i></button>
                      <p  name="quantity" wire:model="quantityCount" value="" class="input-quantity text-center border border-2" style="width:50px;">{{$cart->quantity}}</p>
                      <button type="button" wire:loading.attr="disabled" wire:click="incrementQuantity({{$cart->id}})" class="btn btn1"><i class="fa fa-plus"></i></button>
                </div> 
            </td>
                @if($cart->product_color_id)
    
                <td style="color:{{$cart->productColor->code}};">{{$cart->productColor->name}}</td>
                @else
    
                <td>No color selected</td>
                @endif
                <td>${{$cart->products->shipping_price}}.00</td>
                <td>${{$cart->products->selling_price*$cart->quantity+$cart->products->shipping_price}}.00</td>

                @php  
                
                 $totalPrice += $cart->products->selling_price*$cart->quantity+$cart->products->shipping_price
                
                @endphp
    
            </tr>
    
            
            
            @endforeach
        </table>
    
        <div class="row">
            <div class="col-md-8 my-md-auto mt-3">
              <h4>Get the best deals & Offers <a href="{{route('user.shop')}}">shop now</a></h4>
            </div>

            <div class="col-md-4 mt-3">
                <div class="shadow-sm bg-white p-3">
                    <h5>Total:
                        <span class="float-end">${{$totalPrice}}.00</span>
                    </h5>
                    <hr>
                    <a href="{{route('checkout')}}" class="btn  btn-warning w-100">Checkout</a>
                </div>
            </div>


            @else
            <div class="row">
                <div class="col-md-12 text-center" style="margin-bottom:100px;">
                    <span class="h3 text-center" style="margin-bottom:25px;">Your Cart is empty!</span><br/>
                    <span class="h4 text-center buy_something">Select something from <a href="{{route('user.shop')}}">Shop</a> to have products in your cart!</span>
                </div>
            </div>

                

            @endif
        </div>
    </div> 

</div>
