

    <div class="row">
        <div class="col-md-3">
                  @if($category->brands)


<div class="card">
                    <div class="card-header"><h4>Brands</h4></div>

                    <div class="card-body">

                        @foreach($category->brands as $brand)
                            <label class="d-block">
                                <input type="checkbox" wire:model="brandInputs" wire:click="applyFilter" value="{{ $brand->name }}" /> {{ $brand->name }}
                            </label>

                        @endforeach
                    </div>
                 </div>

        
                 

        
                  @endif


                  <div class="card mt-3">
                    <div class="card-header"><h4>Price</h4></div>
            
                    <div class="card-body">
            
                        
                            <label class="d-block">
                                <input type="radio" name="priceSort" wire:model="priceInput" wire:click="applyFilter"  value="hight-to-low" /> Hight to Low
                            </label>
            
            
                            <label class="d-block">
                                <input type="radio" name="priceSort" wire:model="priceInput" wire:click="applyFilter"  value="low-to-hight" /> Low to Hight
                            </label>
            
                        
                    </div>
                 </div>
            
                 </div>
                 

        <div class="col-md-9">

             <div class="row">

                
 @if($products->count() > 0)
@foreach($products as $product)
   

    <div class="col-md-4">
        <div class="product-card">
            <div class="product-card-img">
                @if($product->quantity > 0)
                   <label class="stock bg-success">In Stock</label>

                   
                       
                   @else
                   <label class="stock bg-danger">Out of Stock</label>
                   
                @endif

                
                @if($product->productImages->count() > 0)
                <a href="{{route('view.product',$product->id)}}">
                <img src="{{ asset($product->productImages[0]->image)}}" alt="{{$product->name}}">
            </a>
                @else

                     
                @endif

            </div>
            <div class="product-card-body">
                <p class="product-brand">{{$product->brand}}</p>
                <h5 class="product-name">
                   <a href="{{route('view.product',$product->id)}}">
                    {{$product->name}}
                   </a>
                </h5>

                                    <!--NewStars -->

                                    @php

                                    $ratings = App\Models\Rating::where('prod_id', $product->id)->get();
                                     $rating_sum = App\Models\Rating::where('prod_id', $product->id)->sum('stars_rated');
                         
                
                                     if($ratings->count() > 0){
                
                                       $rating_value = $rating_sum/$ratings->count();
                
                                       }
                                        else{
                                       $rating_value = 0;
                                         }
                
                
                                  @endphp
                
                
                                    @php $ratenum = number_format($rating_value) @endphp
                
                
                                    @php
                                        for($i = 1; $i <= 5; $i++) {
                                        if($i <= $ratenum) {
                                          echo '<i class="fa fa-star checked"></i>';
                                           } else {
                                           echo '<i class="fa fa-star"></i>';
                                             }
                                              }
                                     @endphp
                
                                     ({{$ratings->count()}})
                                    <!--End NewStars-->
                

                @if($product->selling_price === $product->original_price)
               <div>
         <span class="selling-price">${{$product->selling_price}}</span>
                  </div>
         @else
        <div>


            <span class="selling-price">${{$product->selling_price}}</span>
            <span class="original-price">${{$product->original_price}}</span>
        </div>  
        @endif
                

            </div>


        </div>
    </div>

   

    @endforeach

    @else


    <div class="col-md-12">
        <div class="p-2">
            <h4 class="text-center">No products available for {{$category->name}}</h4>
        </div>
   
       </div>


    @endif

    
    

    
</div>


        </div>
    

    