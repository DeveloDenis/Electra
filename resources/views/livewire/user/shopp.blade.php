<div>
    

    <div class="row   my-3  " >

        <div class="col-md-12 py-3 py-md-0 text-center ">
          <h1 class="h63">More Products</h1>
          
        </div>
      
        @if($products)
      
      
        <div class="row row2 " >
            
            <div class="col-lg-12">
                
                
                <div class="row">
                    
                    @forelse($products as $product)
      
          <div class="col-md-3 column" style="margin-top: 30px;" >
           <div class="product-card " style="width:18rem;">
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
                       <span class="original-price">$<u>{{$product->original_price}}</u></span>
                   </div>  
                   @endif
       
               </div>
       
       
           </div>
       </div>
       
          @empty
       
          <div class="col-md-12">
           <div class="p-2">
               <h4 class="text-center">No products available </h4>
           </div>
       
          @endforelse
                    
                </div>
                
                
                
                
            </div>
      
      
          
      
      
        </div>
      
         
      
      
      </div>
      
      @else
      
      <div class="col-md-12">
        <div class="p-2">
          <h4>No Products Available</h4>
        </div>
      </div>
      
      @endif
      
      <div>
      
        {{$products->links('livewire-pagination-links')}}
      
      </div>
      
      </div>


</div>
