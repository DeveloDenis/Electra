@extends('extenders.layout')




@section('title')

{{$product->meta_title}}



@endsection


@section('meta_keyword')

{{$product->meta_keyword}}

@endsection


@section('meta_description')

{{$product->meta_description}}

@endsection

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
    margin-top: 130px;
   }
      
   .col-md-7 h2{
        color: #555;

   }

   .stars{
    height:15px;

   }

   .price{
    color:#FE980F;
    font-size: 26px;
    font-weight:bold;
    padding-top: 20px;
     

   }

   .input{
    border: 1px solid #ccc;
    font-weight: bold;
    height: 33px;
    text-align: center;
    width:30px;

   }

   /*Product Cards*/

   

   #product-cards{
          margin-top: 100px;

        }

        #product-cards h1{
             color: #000000;
             text-shadow: 1px 1px 1px black;
             border-bottom: 2px solid #ffc800; 
        }

        #product-cards .card h3{
            font-size: 25px;
            color:black;

        }

        #product-cards .card p{
                font-size: 12px;
                margin-top: 5px;
                color: black;

        }

        .star i{
           margin-left: 5px;
           font-size: 13px;
        }

        .checked{
            color: #ffc800;
        }

        #product-cards .card h2{
            font-size:20px;
            color: black;
            margin-top: 20px;
             
        }

        #product-cards .card h2 span{
            float: right;
            color: black;
            cursor:pointer;
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
 .original-price{
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

.wrapper{
  height:420px;
  
  display:flex;
  overflow-x:auto;
}



.wrapper .product-card{
  min-width: 18rem;
  
  margin-right:5px;

}


.row-background{
  background-color:#ecebeb;
}

.line{
  background-color: rgb(7, 112, 241);
  width:270px;
  height:3px;
}


.q{
  -moz-appearance: textfield;
}

.q::-webkit-outer-spin-button,
.q::-webkit-inner-spin-button{
  -webkit-appearance:none;
  margin:0;
}


/*specification*/

 .content{
  display:none;
}


#ch:checked~ .content{
  display:block
}


#ch:checked~ .table1{
  display:none;
}

#ch:checked~ .btn1{
  display:none;
}

/*Star Rating*/



.rating-css div {
    color: #ffe400;
    font-size: 30px;
    font-family: sans-serif;
    font-weight: 800;
    text-align: center;
    text-transform: uppercase;
    padding: 20px 0;
  }
  .rating-css input {
    display: none;
  }
  .rating-css input + label {
    font-size: 30px;
    text-shadow: 1px 1px 0 #8f8420;
    cursor: pointer;
  }
  .rating-css input:checked + label ~ label {
    color: #b4afaf;
  }
  .rating-css label:active {
    transform: scale(0.8);
    transition: 0.3s ease;
  }

/*End Star Rating*/

/*Stars*/

.checked{
  color: #ffe400;

}

/*End Stars*/


/*Image Slider*/

#featured{
           max-width: 350px;
           max-height: 500px;
           object-fit: cover;
           
       
        }


        .thumbnail{

            object-fit: cover;
            max-width: 180px;
            max-height: 100px;
            cursor: pointer;
            opacity: 0.5;
            margin: 5px;
            border: 2px solid black;

        }

        .thumbnail:hover{
           opacity:1;
        }

        .active{
            opacity:1;
        }


        #slide-wrapper{

            max-width: 500px;
            display: flex;
            min-height: 100px;
            align-items: center;
        }


        #slider{
            width: 440px;
            display: flex;
             flex-wrap: nowrap;
             overflow-x: hidden;
        }

        .arrow{
            width: 30px;
            height: 30px;
            cursor: pointer;
            transition: .3s;

        }

        .arrow:hover{
            opacity: 5;
            width: 35px;
            height: 35px;
        }

        @media only screen and (min-width:1024px) and (max-width:1024px){

#featured{
 margin-top:20px;
 width: 230px;
}





}

      


        @media only screen and (min-width:819px) and (max-width:820px){

#featured{
 margin-top:20px;
 width: 190px;
}





}

@media only screen and (min-width:767px) and (max-width:768px){

#featured{
 margin-top:20px;
 width: 180px;
}


}




/*End Image Slider*/
</style>

@endsection


@section('content')

@include('extenders.navbar')


<!--Modal for Stars-->




<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{route('rating.add')}}" method="POST">
        @csrf

        <input type="hidden" name="product_id" value="{{$product->id}}">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Rate This Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <!--Stars-->
 
        <div class="rating-css ">
          <div class="star-icon">
            @auth
            @if($user_rating)

            @for($i=1; $i<=$user_rating->stars_rated; $i++)
              
            <input type="radio" value="{{$i}}" name="product_rating" checked id="rating{{$i}}">
            <label for="rating{{$i}}" class="fa fa-star "></label>
            @endfor

            @for($j = $user_rating->stars_rated+1; $j <= 5; $j++)
            <input type="radio" value="{{$j}}" name="product_rating" id="rating{{$j}}">
            <label for="rating{{$j}}" class="fa fa-star "></label>
            @endfor

            
            @else
              <input type="radio" value="1" name="product_rating" checked id="rating1">
              <label for="rating1" class="fa fa-star"></label>
              <input type="radio" value="2" name="product_rating" id="rating2">
              <label for="rating2" class="fa fa-star"></label>
              <input type="radio" value="3" name="product_rating" id="rating3">
              <label for="rating3" class="fa fa-star"></label>
              <input type="radio" value="4" name="product_rating" id="rating4">
              <label for="rating4" class="fa fa-star"></label>
              <input type="radio" value="5" name="product_rating" id="rating5">
              <label for="rating5" class="fa fa-star"></label>


              @endif

              @endauth
          </div>
      </div>


        <!--End Stars-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
     </form>
    </div>
  </div>
</div>


<!--End Modal for stars-->


<section class="products display my-5"> 
  
       <div class="container1">

        @if(session()->has('status'))
                          
<div class="alert alert-dark alert-dismissible fade show">
  {{session('status')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>


@endif

         @auth()
        @if(Auth::user()->is_admin == 1)

         <div class="row ">
                <div class="col-md-12 mb-3">
                    
                    @if($product->specificationCase || $product->specificationGeneral || $product->specificationMemory || $product->specificationMotherboard || $product->specificationMultyMedia || $product->specificationPhotoVideo || $product->specificationProcessor || $product->specificationDisplay || $product->specificationStorage || $product->specificationVideoCard)
                    
                     <a href="{{route('specification.edit',$product->id)}}" class="float-end btn btn-success btn-sm me-3 ms-5">Update Specifications</a>
                     
                     @else
                     
                     <a href="{{route('specification_create',$product->id)}}"><button class=" float-end btn btn-primary btn-sm me-3 ms-5">Add Specification</button></a>
                     
                     @endif
                    
                    <a href="{{route('edit.product',$product->id)}}" class="float-end btn btn-success btn-sm ">Update Product Details</a>
                    
                </div>
         </div>
         
         
         @else
         
         
         @endif
         
         @endauth
         
         
  
              <div class="row">
                   <!--Image Product-->


                   @if($product->productImages->count() > 0)
                   <div class="col-md-3">

                   <img id="featured" src="{{asset($product->productImages[0]->image)}}"/>  


                   <div id="slide-wrapper">
               
                       <i class="fa-solid fa-arrow-left" id="slideLeft" class="arrow"></i>
               
                       <div id="slider">

                         
                        @forelse($product->productImages as $image)
                           <img class="thumbnail active" src="{{asset($image->image)}}">
                           


                           @empty


                           @endforelse
               
                       </div>
               
               
                       <i class="fa-solid fa-arrow-right" id="slideRight" class="arrow"></i>
                      
               
                   </div>

                  </div>
                   
    @else

  

    @endif

    <!--End Image Product-->

    <div class="col-md-4">

       

       <h2>{{$product->small_description}}</h2>

       <p>Product Code:{{$product->slug}}</p>


       


           <!--Star Section-->
             @php $ratenum = number_format($rating_value) @endphp

            <div class="rating">
              @for($i=1; $i<=$ratenum; $i++)
              
              <i class="fa fa-star checked"></i>
              @endfor

              @for($j = $ratenum+1; $j <= 5; $j++)
              <i class="fa fa-star"></i>
              @endfor

               @if($ratings->count() > 0)
              
               <span>{{$ratings->count()}} Ratings</span>
 
              @else
               <span>No Ratings</span>
              @endif
            </div>
           

           @auth()
           <button type="submit" class="btn btn-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Rate this product
          </button><br/>
           @endauth

          <!--End Star Section-->        

       @if($product->selling_price === $product->original_price)

       <p class="price">${{$product->selling_price}}.00</p><br/>

       @else

       <span class="price ">${{$product->selling_price}}.00</span> <span class="original-price">${{$product->original_price}}.00</span><br/>

       @endif

       <form action="{{route('add.cart',$product->id)}}" method="post">
        @csrf
         <h5>Select Color:</h5>
       @forelse($product->productColors as $color)
            
           @if($color->quantity > 0) 
        <p style="color:{{$color->color->code}};"><input name="product_color" type="radio" value="{{$color->color->id}}"/>{{$color->color->name}}</p><br/>
         
          
         

         @else

         <p><p style="color:{{$color->color->code}};">{{$color->color->name}} <label class="stock bg-danger" style="color:white; border-radius:5px;" >Out of Stock</label></p> </p><br/>

         @endif
        @empty

       @endforelse

       @if($product->quantity > 0)
       <p><b>Availability:</b><label class="stock bg-success" style="color:white; border-radius:5px;">In Stock</label></p>

       @else
       <p><b>Availability:</b><label class="stock bg-danger" style="color:white; border-radius:5px;" >Out of Stock</label></p>
       @endif

       <p><b>Condition:</b>New</p>
       <p><b>Brand:</b> {{$product->brand}}</p>

       @auth()
       @if($product->quantity > 0)
        <input type="hidden" value="1" name="quantity" style="width:50px;"/>
       <button type="submit"  class="btn btn-primary"><i class="fa-solid fa-cart-plus"></i> Add to cart </button>
       @else

       <p class="text-danger">Out of stock</p>
       @endif
       @endauth

       </form>

       @guest()

       <label class="alert alert-warning">!Please login or create an account to purchase this product!</label>
                 <a href="{{route('user.login')}}" class="btn btn-primary">Login Now</a>
       @endguest
    </div>

      <div class="col-md-4 ">
       <div class="row my-3">
    <div class="col-md-4" style="width:250px;"> 
        <h5><i class="fa-solid fa-truck-fast"></i> Delivery by courier</h5>
    </div>

    
   </div>

  <div class="row">
    <div class="col-md-4">
            <h5><i class="fa-regular fa-star"></i>BENEFITS:</h5>

           <p><i class="fa-solid fa-check" style="width:0.8rem;color:rgb(6, 151, 6);"></i>Opening the parcel upon delivery</p>
           <p><i class="fa-solid fa-check" style="width:0.8rem;color:rgb(6, 151, 6);"></i>14 days right of return</p>
           <p><i class="fa-solid fa-check" style="width:0.8rem;color:rgb(6, 151, 6);"></i>Warranty included</p>
    </div>
          </div>
       
        </div>


        </div>

      </div>

    </div>


</section>








 







<!--Similar Brand Products-->
<section class="Brand products row-background">

  <div class="row py-5 ">
    <div class="col-lg-5   ">
     <h1>Related 
      {{$product->brand}}
      Products:</h1>
      <div class="line ms-2"></div>
    </div>
</div>

<div class="row mx-3 row-background">


<div class="col-md-12">

    @if($products)
           <!--Similar Products-->
  <div class="wrapper">
    


    @forelse($products as $productBrand)

     

    <div class=" col-md-3  " >
      <div class="product-card" style="width:18rem;">
          <div class="product-card-img">
              
                 
                 
              

              
              @if($productBrand->productImages->count() > 0)
              <a href="{{route('view.product',$productBrand->id)}}">
              <img src="{{ asset($productBrand->productImages[0]->image)}}" alt="{{$productBrand->name}}">
          </a>
              @else

                   
              @endif

          </div>
          <div class="product-card-body">
              <p class="product-brand">{{$productBrand->brand}}</p>
              <h5 class="product-name">
                 <a href="{{route('view.product',$productBrand->id)}}">
                  {{$productBrand->name}}
                 </a>
              </h5>

                                  <!--NewStars -->

                                  @php

                                  $ratings = App\Models\Rating::where('prod_id', $productBrand->id)->get();
                                   $rating_sum = App\Models\Rating::where('prod_id', $productBrand->id)->sum('stars_rated');
                       
              
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

               @if($productBrand->selling_price === $productBrand->original_price)
                     <div>
               <span class="selling-price">${{$productBrand->selling_price}}</span>
                        </div>
             @else
              <div>


                  <span class="selling-price">${{$productBrand->selling_price}}</span>
                  <span class="original-price">$<u>{{$productBrand->original_price}}</u></span>
              </div>  
              @endif

          </div>


      </div>
  </div> 

    
      

    @empty
    <div class="col-md-12">
     <div class="p-2">
         <h4 class="text-center">No related products  available </h4>
     </div>
    </div>
     
    @endforelse


      </div>

      

@else

<div class="col-md-12">
  <div class="p-2">
    <h4>No Other Products Available</h4>
  </div>
</div>

@endif


</div>

</div>
      

</section>

<!--End Similar Brand Products-->





<!--Specifications-->
<section class="product detailss my-5">


  @if($product->specificationGeneral || $product->specificationDisplay || $product->specificationCase || $product->specificationMemory || $product->specificationMotherboard || $product->specificationMultyMedia || $product->specificationPhotoVideo || $product->specificationProcessor || $product->specificationStorage || $product->specificationVideoCard)
   <div class="row container4">
     <h3 class="ms-4 mb-5">Specifications</h3>
     <div class="col-md-4  me-8 container5" style=" width:100%; ">
           
           


            <input type="checkbox" id="ch" style="display:none;">

       

            <table class="table table-primary table-striped table1">


              
              <tbody>
                  


                  @if($product->specificationGeneral->device_type)
                <tr> 
                     <td>Device Type:</td>
                     <td>{{$product->specificationGeneral->device_type}}</td>
                <tr>

                  @else


                  @endif


                  @if($product->specificationGeneral->destined_for)
                <tr> 
                     <td>Destined For:</td>
                     <td>{{$product->specificationGeneral->destined_for}}</td>
                <tr>

                  @else


                  @endif



                  @if($product->specificationGeneral->conectivity)
                  <tr> 
                       <td>Conectivity:</td>
                       <td>{{$product->specificationGeneral->conectivity}}</td>
                  <tr>

                    @else


                    @endif


                    @if($product->specificationGeneral->operating_system)
                    <tr> 
                         <td>Operating System:</td>
                         <td>{{$product->specificationGeneral->operating_system}}</td>
                    <tr>

                      @else


                      @endif

              </tbody>

            </table>

    

        


            <div class="content">


              

              <table  class="table table-primary table-striped">

                <tbody>
                  

                  @if($product->specificationGeneral->device_type)
                <tr> 
                     <td>Device Type:</td>
                     <td>{{$product->specificationGeneral->device_type}}</td>
                <tr>

                  @else


                  @endif


                  @if($product->specificationGeneral->destined_for)
                <tr> 
                     <td>Destined For:</td>
                     <td>{{$product->specificationGeneral->destined_for}}</td>
                <tr>

                  @else


                  @endif



                  @if($product->specificationGeneral->conectivity)
                  <tr> 
                       <td>Conectivity:</td>
                       <td>{{$product->specificationGeneral->conectivity}}</td>
                  <tr>

                    @else


                    @endif


                    @if($product->specificationGeneral->operating_system)
                    <tr> 
                         <td>Operating System:</td>
                         <td>{{$product->specificationGeneral->operating_system}}</td>
                    <tr>

                      @else


                      @endif

                      @if($product->specificationGeneral->operation_system_version)
                    <tr> 
                         <td>Operating System Version:</td>
                         <td>{{$product->specificationGeneral->operation_system_version}}</td>
                    <tr>

                      @else


                      @endif


                      @if($product->specificationGeneral->model)
                    <tr> 
                         <td>Model:</td>
                         <td>{{$product->specificationGeneral->model}}</td>
                    <tr>

                      @else


                      @endif


                      @if($product->specificationGeneral->tehnology)
                      <tr> 
                           <td>Tehnology:</td>
                           <td>{{$product->specificationGeneral->tehnology}}</td>
                      <tr>

                        @else


                        @endif




                      @if($product->specificationGeneral->lineup)
                      <tr> 
                           <td>Lineup:</td>
                           <td>{{$product->specificationGeneral->lineup}}</td>
                      <tr>

                        @else


                        @endif


                        @if($product->specificationGeneral->weight)
                        <tr> 
                             <td>Weight:</td>
                             <td>{{$product->specificationGeneral->weight}}</td>
                        <tr>

                          @else



                          @endif


                          @if($product->specificationGeneral->height)
                          <tr> 
                               <td>Height:</td>
                               <td>{{$product->specificationGeneral->height}}</td>
                          <tr>

                            @else



                            @endif


                            @if($product->specificationGeneral->lenght)
                            <tr> 
                                 <td>Lenght:</td>
                                 <td>{{$product->specificationGeneral->lenght}}</td>
                            <tr>

                              @else



                              @endif


                              @if($product->specificationGeneral->dimension)
                              <tr> 
                                   <td>Dimension:</td>
                                   <td>{{$product->specificationGeneral->dimension}}</td>
                              <tr>

                                @else



                                @endif


                                @if($product->specificationGeneral->color)
                                <tr> 
                                     <td>Color:</td>
                                     <td>{{$product->specificationGeneral->color}}</td>
                                <tr>

                                  @else



                                  @endif


                                  @if($product->specificationGeneral->SIM_slots)
                                  <tr> 
                                       <td>SIM Slots:</td>
                                       <td>{{$product->specificationGeneral->SIM_slots}}</td>
                                  <tr>

                                    @else



                                    @endif


                                    @if($product->specificationGeneral->SIM_type)
                                    <tr> 
                                         <td>SIM Type:</td>
                                         <td>{{$product->specificationGeneral->SIM_type}}</td>
                                    <tr>
  
                                      @else
  

  
                    @endif

                      @if($product->specificationGeneral->bluetooth_version)
                        <tr> 
                             <td>Bluetooth Version:</td>
                             <td>{{$product->specificationGeneral->bluetooth_version}}</td>
                        <tr>
    
                       @else
    

    
                       @endif


                       @if($product->specificationGeneral->senzors)
                       <tr> 
                            <td>Senzors:</td>
                            <td>{{$product->specificationGeneral->senzors}}</td>
                       <tr>
   
                      @else
   

   
                      @endif


                      @if($product->specificationGeneral->relased_yaer)
                       <tr> 
                            <td>Relased Yaer:</td>
                            <td>{{$product->specificationGeneral->relased_yaer}}</td>
                       <tr>
   
                      @else
   

   
                      @endif


                      

              </tbody>

              
                   
              </table>

             

               

              <table  class="table table-primary table-striped">


                <tbody>
                  

                  @if($product->specificationDisplay->display_type)
                <tr> 
                     <td>Display Type:</td>
                     <td>{{$product->specificationDisplay->display_type}}</td>
                <tr>

                  @else


                  @endif


                  @if($product->specificationDisplay->diagonal_display)
                <tr> 
                     <td>Diagonal Display:</td>
                     <td>{{$product->specificationDisplay->diagonal_display}}</td>
                <tr>

                  @else


                  @endif



                  @if($product->specificationDisplay->format_display)
                  <tr> 
                       <td>Format Display:</td>
                       <td>{{$product->specificationDisplay->format_display}}</td>
                  <tr>

                    @else


                    @endif


                    @if($product->specificationDisplay->tehnology_display)
                    <tr> 
                         <td>Tehnology Display:</td>
                         <td>{{$product->specificationDisplay->tehnology_display}}</td>
                    <tr>

                      @else


                      @endif

                      @if($product->specificationDisplay->refresh_rate)
                    <tr> 
                         <td>Refresh Rate:</td>
                         <td>{{$product->specificationDisplay->refresh_rate}}</td>
                    <tr>

                      @else


                      @endif


                      @if($product->specificationDisplay->luminozity)
                    <tr> 
                         <td>Luminozity:</td>
                         <td>{{$product->specificationDisplay->luminozity}}</td>
                    <tr>

                      @else


                      @endif


                      @if($product->specificationDisplay->touchscreen)
                      <tr> 
                           <td>Touchscreen:</td>
                           <td>{{$product->specificationDisplay->touchscreen == '1' ? 'Yes':'No'}}</td>
                      <tr>

                        @else


                        @endif




                      @if($product->specificationDisplay->rezolution)
                      <tr> 
                           <td>Rezolution:</td>
                           <td>{{$product->specificationDisplay->rezolution}}</td>
                      <tr>

                        @else


                        @endif


                        @if($product->specificationDisplay->display_finish)
                        <tr> 
                             <td>Display Finish:</td>
                             <td>{{$product->specificationDisplay->display_finish}}</td>
                        <tr>

                          @else



                          @endif


                          @if($product->specificationDisplay->display_functions)
                          <tr> 
                               <td>Display Functions:</td>
                               <td>{{$product->specificationDisplay->display_functions}}</td>
                          <tr>

                           



                      

              </tbody>

              
                   
              </table>

               @else


              @endif


              <table  class="table table-primary table-striped">

                <tbody>
                  

                  @if($product->specificationProcessor->processor_type)
                <tr> 
                     <td>Processor Type:</td>
                     <td>{{$product->specificationProcessor->processor_type}}</td>
                <tr>

                  @else


                  @endif


                  @if($product->specificationProcessor->processor_model)
                <tr> 
                     <td>Processor Model:</td>
                     <td>{{$product->specificationProcessor->processor_model}}</td>
                <tr>

                  @else


                  @endif



                  @if($product->specificationProcessor->processor_tehnology)
                  <tr> 
                       <td>Processor Tehnology:</td>
                       <td>{{$product->specificationProcessor->processor_tehnology}}</td>
                  <tr>

                    @else


                    @endif


                    @if($product->specificationProcessor->processor_frequency)
                    <tr> 
                         <td>Processor Frequency:</td>
                         <td>{{$product->specificationProcessor->processor_frequency}}</td>
                    <tr>

                      @else


                      @endif

                      @if($product->specificationProcessor->processor_stocket)
                    <tr> 
                         <td>Processor Stocket:</td>
                         <td>{{$product->specificationProcessor->processor_stocket}}</td>
                    <tr>

                      @else


                      @endif


                      @if($product->specificationProcessor->processor_manufactures)
                    <tr> 
                         <td>Processor Manufacture:</td>
                         <td>{{$product->specificationProcessor->processor_manufactures}}</td>
                    <tr>

                      @else


                      @endif


                      @if($product->specificationProcessor->number_of_cores)
                      <tr> 
                           <td>Number of Cores:</td>
                           <td>{{$product->specificationProcessor->number_of_cores}}</td>
                      <tr>

                        @else


                        @endif




                      @if($product->specificationProcessor->cache)
                      <tr> 
                           <td>Cache:</td>
                           <td>{{$product->specificationProcessor->cache}}</td>
                      <tr>

                        @else


                        @endif


                        @if($product->specificationProcessor->integrated_graphics_processor)
                        <tr> 
                             <td>Integrated Graphics Processor:</td>
                             <td>{{$product->specificationProcessor->integrated_graphics_processor}}</td>
                        <tr>

                          @else



                          @endif


                             



                      

              </tbody>

              
                   
              </table>



              <table  class="table table-primary table-striped">

                <tbody>
                  

                  @if($product->specificationVideoCard->videocard_type)
                <tr> 
                     <td>Videocard Type:</td>
                     <td>{{$product->specificationVideoCard->videocard_type}}</td>
                <tr>

                  @else


                  @endif


                  @if($product->specificationVideoCard->videocard_manufacturer)
                <tr> 
                     <td>Videocard Manufacture:</td>
                     <td>{{$product->specificationVideoCard->videocard_manufacturer}}</td>
                <tr>

                  @else


                  @endif



                  @if($product->specificationVideoCard->chipset_video)
                  <tr> 
                       <td>Chipset Video:</td>
                       <td>{{$product->specificationVideoCard->chipset_video}}</td>
                  <tr>

                    @else


                    @endif


                    @if($product->specificationVideoCard->video_card_model)
                    <tr> 
                         <td>Videocard Model:</td>
                         <td>{{$product->specificationVideoCard->video_card_model}}</td>
                    <tr>

                      @else


                      @endif

                      @if($product->specificationVideoCard->video_memory_capacity)
                    <tr> 
                         <td>Video Memory Capacity:</td>
                         <td>{{$product->specificationVideoCard->video_memory_capacity}}</td>
                    <tr>

                      @else


                      @endif


                      @if($product->specificationVideoCard->videocard_memory_type)
                    <tr> 
                         <td>Videocard Memory Type :</td>
                         <td>{{$product->specificationVideoCard->videocard_memory_type}}</td>
                    <tr>

                      @else


                      @endif


                      @if($product->specificationVideoCard->videocard_memory_capacity)
                      <tr> 
                           <td>Videocard Memory Capacity:</td>
                           <td>{{$product->specificationVideoCard->videocard_memory_capacity}}</td>
                      <tr>

                        @else


                        @endif




                      @if($product->specificationVideoCard->videocard_tehnologi)
                      <tr> 
                           <td>Videocard Tehnology:</td>
                           <td>{{$product->specificationVideoCard->videocard_tehnologi}}</td>
                      <tr>

                        @else


                        @endif


                        @if($product->specificationVideoCard->videocard_ports)
                        <tr> 
                             <td>Videocard Ports:</td>
                             <td>{{$product->specificationVideoCard->videocard_ports}}</td>
                        <tr>

                          @else



                          @endif


                             



                      

              </tbody>

              
                   
              </table>





              <table  class="table table-primary table-striped">

                <tbody>
                  

                  @if($product->specificationMotherboard->motherboard_manufacturer)
                <tr> 
                     <td>Motherboard Manufacturer:</td>
                     <td>{{$product->specificationVideoCard->motherboard_manufacturer}}</td>
                <tr>

                  @else


                  @endif


                  @if($product->specificationMotherboard->socket_processor)
                <tr> 
                     <td>Socket Processor:</td>
                     <td>{{$product->specificationMotherboard->socket_processor}}</td>
                <tr>

                  @else


                  @endif



                  @if($product->specificationMotherboard->chipset)
                  <tr> 
                       <td>Chipset:</td>
                       <td>{{$product->specificationMotherboard->chipset}}</td>
                  <tr>

                    @else


                    @endif


                    @if($product->specificationMotherboard->onboard_slots)
                    <tr> 
                         <td>Onboard Slots:</td>
                         <td>{{$product->specificationMotherboard->onboard_slots}}</td>
                    <tr>

                      @else


                      @endif

                      @if($product->specificationMotherboard->back_panel_ports)
                    <tr> 
                         <td>Back Panel Ports:</td>
                         <td>{{$product->specificationMotherboard->back_panel_ports}}</td>
                    <tr>

                      @else


                      @endif


                      @if($product->specificationMotherboard->networck)
                    <tr> 
                         <td>Networck :</td>
                         <td>{{$product->specificationMotherboard->networck}}</td>
                    <tr>

                      @else


                      @endif


                      @if($product->specificationMotherboard->total_number_of_memory_slots)
                      <tr> 
                           <td>Total Number of Memory Slots:</td>
                           <td>{{$product->specificationMotherboard->total_number_of_memory_slots}}</td>
                      <tr>

                        @else


                        @endif






                             



                      

              </tbody>

              
                   
              </table>





              <table  class="table table-primary table-striped">

                <tbody>
                  

                  @if($product->specificationMemory->memory_capacity)
                <tr> 
                     <td>Memory Capacity:</td>
                     <td>{{$product->specificationMemory->memory_capacity}}</td>
                <tr>

                  @else


                  @endif


                  @if($product->specificationMemory->memory_type)
                <tr> 
                     <td>Memory Type:</td>
                     <td>{{$product->specificationMemory->memory_type}}</td>
                <tr>

                  @else


                  @endif



                  @if($product->specificationMemory->memory_manufacturer)
                  <tr> 
                       <td>Memory Manufacturer:</td>
                       <td>{{$product->specificationMemory->memory_manufacturer}}</td>
                  <tr>

                    @else


                    @endif


                    @if($product->specificationMemory->memory_frequez)
                    <tr> 
                         <td>Memory Frequez:</td>
                         <td>{{$product->specificationMemory->memory_frequez}}</td>
                    <tr>

                      @else


                      @endif







                             



                      

              </tbody>

              
                   
              </table>



              <table  class="table table-primary table-striped">

                <tbody>
                  

                  @if($product->specificationStorage->storage_type)
                <tr> 
                     <td>Storage Type:</td>
                     <td>{{$product->specificationStorage->storage_type}}</td>
                <tr>

                  @else


                  @endif


                  @if($product->specificationStorage->producerSSDmodel)
                <tr> 
                     <td>Producer SSD Model:</td>
                     <td>{{$product->specificationStorage->producerSSDmodel}}</td>
                <tr>

                  @else


                  @endif



                  @if($product->specificationStorage->SSD_capacity)
                  <tr> 
                       <td>SSD Capacity:</td>
                       <td>{{$product->specificationStorage->SSD_capacity}}</td>
                  <tr>

                    @else


                    @endif


                    @if($product->specificationStorage->SSD_interface)
                    <tr> 
                         <td>SSD Interface:</td>
                         <td>{{$product->specificationStorage->SSD_interface}}</td>
                    <tr>

                      @else


                      @endif







                             



                      

              </tbody>

              
                   
              </table>





              <table  class="table table-primary table-striped">

                <tbody>
                  

                  @if($product->specificationPhotoVideo->number_camera)
                <tr> 
                     <td>Number Camera:</td>
                     <td>{{$product->specificationPhotoVideo->number_camera}}</td>
                <tr>

                  @else


                  @endif


                  @if($product->specificationPhotoVideo->principal_camera_resolution)
                <tr> 
                     <td>Principal Camera Resolution:</td>
                     <td>{{$product->specificationPhotoVideo->principal_camera_resolution}}</td>
                <tr>

                  @else


                  @endif



                  @if($product->specificationPhotoVideo->frontal_camera_resolution)
                  <tr> 
                       <td>Frontal Camera Resolution:</td>
                       <td>{{$product->specificationPhotoVideo->frontal_camera_resolution}}</td>
                  <tr>

                    @else


                    @endif


                    @if($product->specificationPhotoVideo->video_rezolution)
                    <tr> 
                         <td>Video Rezolution:</td>
                         <td>{{$product->specificationPhotoVideo->video_rezolution}}</td>
                    <tr>

                      @else


                      @endif




                      @if($product->specificationPhotoVideo->fotvideo_features)
                    <tr> 
                         <td>Foto & Video Features:</td>
                         <td>{{$product->specificationPhotoVideo->fotvideo_features}}</td>
                    <tr>

                      @else


                      @endif




                      @if($product->specificationPhotoVideo->blit)
                    <tr> 
                         <td>Blit:</td>
                         <td>{{$product->specificationPhotoVideo->blit == '1' ? 'Yes':'No'}}</td>
                    <tr>

                      @else


                      @endif







                             



                      

              </tbody>

              
                   
              </table>




              <table  class="table table-primary table-striped">

                <tbody>
                  

                  @if($product->specificationMultyMedia->optical_drive)
                <tr> 
                     <td>Optical Drive:</td>
                     <td>{{$product->specificationMultyMedia->optical_drive}}</td>
                <tr>

                  @else


                  @endif


                  @if($product->specificationMultyMedia->web_camera)
                <tr> 
                     <td>Web Camera:</td>
                     <td>{{$product->specificationMultyMedia->web_camera}}</td>
                <tr>

                  @else


                  @endif



                  @if($product->specificationMultyMedia->audio)
                  <tr> 
                       <td>Audio:</td>
                       <td>{{$product->specificationMultyMedia->audio}}</td>
                  <tr>

                    @else


                    @endif


                    @if($product->specificationMultyMedia->audio_tehnologii)
                    <tr> 
                         <td>Audio Tehnology:</td>
                         <td>{{$product->specificationMultyMedia->audio_tehnologii}}</td>
                    <tr>

                      @else


                      @endif




                      @if($product->specificationMultyMedia->loudspeaker_manufacturer)
                    <tr> 
                         <td>Loudspeaker Manufacturer:</td>
                         <td>{{$product->specificationMultyMedia->loudspeaker_manufacturer}}</td>
                    <tr>

                      @else


                      @endif




                     







                             



                      

              </tbody>

              
                   
              </table>




              <table  class="table table-primary table-striped">

                <tbody>
                  

                  @if($product->specificationCase->case_type)
                <tr> 
                     <td>Case Type:</td>
                     <td>{{$product->specificationCase->case_type}}</td>
                <tr>

                  @else


                  @endif


                  @if($product->specificationCase->motherboard_format_compatibility)
                <tr> 
                     <td>Motherboard Format Compatibility:</td>
                     <td>{{$product->specificationCase->motherboard_format_compatibility}}</td>
                <tr>

                  @else


                  @endif



                  @if($product->specificationCase->source_power)
                  <tr> 
                       <td>Source Power:</td>
                       <td>{{$product->specificationCase->source_power}}</td>
                  <tr>

                    @else


                    @endif


                    @if($product->specificationCase->processor_cooling_system)
                    <tr> 
                         <td>Processor Cooling System:</td>
                         <td>{{$product->specificationCase->processor_cooling_system}}</td>
                    <tr>

                      @else


                      @endif




                      




                     







                             



                      

              </tbody>

              
                   
              </table>






              <label for="ch" class="btn btn-outline-primary form-control">View Less <i class="fa-solid fa-arrow-up"></i></label> 
            </div>



              <label for="ch" class="btn btn-outline-primary form-control btn1">View More <i class="fa-solid fa-arrow-down"></i></label> 
           

     </div>
   </div>
  
   @else


   @endif

</section>
<!--specifications-->



 


               

        @php
        
        
        $user = Null;
        
        
        
        @endphp

                  
               
         @if(Auth::check())
         
         
            @php $user = auth()->user()->id   @endphp
         
         
         @endif
<section class="comments " >
 
  <livewire:user.comment :product="$product" :user="$user"  />       



</section>
       





      
               
                  @include('extenders.footer')


                  <script type="text/javascript">

                    let thumbnails = document.getElementsByClassName('thumbnail');
              
              
                    let active = document.getElementsByClassName('active');
              
              
                    for( var i=0; i<thumbnails.length; i++){
              
                      
              
                      thumbnails[i].addEventListener('mouseover',function(){
              
                          if(active.length > 0){
                              active[0].classList.remove('active');
                          }
              
                          this.classList.add('active');
              
                          document.getElementById('featured').src = this.src;
                      })
                    }
              
                    let buttonLeft = document.getElementById('slideLeft');
                    let buttonRight = document.getElementById('slideRight');


                    buttonLeft.addEventListener('click',function(){
  
                    document.getElementById('slider').scrollLeft -= 180;


                    });

                      buttonRight.addEventListener('click', function(){

                    document.getElementById('slider').scrollLeft += 180;
                    })
              
                  </script>
               
               @endsection


               

               

        