@extends('extenders.layout')


@section('title','50% Discounts')


@section('style')

<style>

html,body{
      width:100%;
      height:100%;
      margin:0px;
      padding:0px;
      overflow-x:hidden;
    }


    .container1{
        margin-top:150px;
    }

    .product-card{
    background-color: #fff;
    border: 1px solid #ccc;
    margin-bottom: 24px;
}
.product-card a{
    text-decoration: none;
}
.product-card .stock{
    
    color: #fff;
    border-radius: 4px;
    padding: 2px 12px;
    margin: 8px;
    font-size: 12px;
}
.product-card .product-card-img{
    max-height: 260px;
    overflow: hidden;
    border-bottom: 1px solid #ccc;
}
.product-card .product-card-img img{
    width: 100%;
}
.product-card .product-card-body{
    padding: 10px 10px;
}
.product-card .product-card-body .product-brand{
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 4px;
    color: #937979;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}
.product-card .product-card-body .product-name{
    font-size: 20px;
    font-weight: 600;
    color: #000;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}
.product-card .product-card-body .selling-price{
    font-size: 22px;
    color: #000;
    font-weight: 600;
    margin-right: 8px;
}
.product-card .product-card-body .original-price{
    font-size: 18px;
    color: #937979;
    font-weight: 400;
    text-decoration: line-through;
}
.product-card .product-card-body .btn1{
    border: 1px solid;
    margin-right: 3px;
    border-radius: 0px;
    font-size: 12px;
    margin-top: 10px;
}


.checked{
    color:#ffe400;
}

.h3{

    color:#ffe400;
    margin-right:30px;
}

.h4{
    display:flex;
}

</style>

@endsection



@section('content')

@include('extenders.navbar')



<div class="container container1 mb-5" id="product-cards">
   

    <div class="row my-3" style="margin-top: 30px;">
        
<div class="col-md-12">
    <h4 class="h4"><p class="h3">50%</p> Discount Products:</h4>

  </div>

  



    <div class="row">

     

        @forelse($products as $product)
  
       <!--Product Tranding view-->
        <div class="col-md-4">
            <div class="product-card">
                <div class="product-card-img">
                   
                    <label class="stock bg-warning">50%</label>
     
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

    @empty


    <div class="col-md-12">
     <div class="p-2">
         <h4 class="text-center">No products available </h4>
     </div>

     
    @endforelse


    {{$products->links()}}


    </div>



    
    





  










</div>




</div>

</div>

@include('extenders.footer')

@endsection