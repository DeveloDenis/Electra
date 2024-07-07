@extends('extenders.layout')

@section('title','Home page')

@section('style')


<style>

*{
    padding:0%;
    margin: 0;
    box-sizing:border-box;
}



html,body{
  width:100%;
  height:100%;
  margin:0px;
  padding:0px;
  overflow-x:hidden;
}


.btn0{
    height:40px;
    width: 40%;
    outline: none;
    border: none;
    background: rgb(32, 129, 204);
    color: white;
    font-weight:  700;
    border-radius: 60px;
    
}

.main{
  background: url('examples-img/modern-stationary-collection-arrangement.jpg');
  background-repeat:no-repeat;
  background-size: cover;
  height:100vh;
  background-position: 50% 50% ;
  width:100%;
}

.main h1{
  color: rgb(44, 122, 181);
  font-size: 4rem;
  font-weight: 700;
  
}

.main p{
  color: rgb(44, 122, 181);
  font-size: 1.3rem ;
}

.btn1{
  height: 45px;
  width: 35%;
  border: none;
  outline: none;
  background-color: rgb(86, 99, 108);
  color: #ffffff;
  border-radius: 60px;
   
} 

.a2{
   text-decoration: none;
   color: #fff;
}

.btn1:hover{
  height: 45px;
  width: 35%;
  border: none;
  outline: none;
  background-color: rgb(49, 54, 57);
  color: #ffffff;
  border-radius: 60px
}

.a{
  text-decoration:none;
  color:black;
}

.a:hover{
  color: rgb(32, 129, 204);
}

h1{
  font-weight: 700;
}


.btn2{
  height: 45px;
  width: 35%;
  border: none;
  outline: none;
  background-color: rgb(55, 144, 212);
  color: #ffffff;
  border-radius: 60px
}

.btn2:hover{
  height: 45px;
  width: 35%;
  border: none;
  outline: none;
  background-color: rgb(44, 122, 181) ;
  color: #ffffff;
  border-radius: 60px
}

.card:hover{
  -webkit-box-shadow: 9px 10px 19px 4px rgba(0,0,0,0.67);
-moz-box-shadow: 9px 10px 19px 4px rgba(0,0,0,0.67);
box-shadow: 9px 10px 19px 4px rgba(0,0,0,0.67);
cursor: pointer;

}


/*Product Cards */

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

.wrapper{
  height:420px;
  
  display:flex;
  overflow-x:auto;
}



.wrapper .product-card{
  min-width: 18rem;
  
  margin-right:5px;

}

@media only screen and (min-width:1000px) and (max-width:1200){

  .product-trading{
    margin-right: 30px;
  }
}


.div456{
  padding-top:50px;
}









</style>

@endsection



@section('content')

@include('extenders.navbar')


<section class="main">
    <div class="container py-5">
      <div class="row py-5">
        <div class="col-md-7 py-5">
           <h1 class="h11">You have  reached  the right sales site !</h1><br>
           <p class="p11">Browse our site and find the latest technological models on the market,
              at the best possible price.Don't be left out of the technological future!
           </p><br>
           <a class="a2" href="{{route('user.shop')}}"><button class="btn1 mt-3">Buy Now</button></a>
        </div>
      </div>
    </div>
  </section>

  <section class="new">
    <div class="container py-5">
      <div class="row  pt-5  ">
           <div class="col-lg-5 m-auto">
            <div class="row text-center ">
              <h4 class="text-center">Our products category:</h4>

              @forelse($categories as $category)
          <div class="col-lg-4 ">
            
            <a class="a" href="{{route('shop.category',$category->slug)}}">
               <img src="{{asset($category->image)}}" alt="img-luid" style="height:90px; width:90px;">
               <h6>{{$category->name}}</h6>
            </a>
           
            
          </div>
           @empty

            <p class="text-center">No category available</p>
          @endforelse
          
        </div>
      </div>
    </div>
    </div>
  </section>


  <section class="product-trending">
    <div class="container py-5">

      <div class="row py-5 ">
             <div class="col-lg-5 m-auto  text-center">
              <h1>What's Trending</h1>
              <h6 style=" color: rgb(44, 122, 181);">Most apreaciated electronics:</h6>
             </div>
      </div>
         
      <div class="row ">


        <div class="col-md-12">



                @if($trendingProducts)




        <div class="wrapper">
  
  
          <!--Product Tranding view-->
        @forelse($trendingProducts as $product)
        <div class="col-md-3 product-trading">
          <div class="product-card" style="width:18rem;">
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
  
        
  
  @else
  
  <div class="col-md-12">
    <div class="p-2">
      <h4>No Products Available</h4>
    </div>
  </div>
  
  @endif




        </div>

        
  

        
      </div>


          <div class="row">
            <div class="col-lg-6 text-center m-auto">
              <a href="{{route('user.shop')}}"><button class="btn2">Click For More</button></a>
            </div>
          </div>
    </div>
  </section>


  <section class="product-featured">
    <div class="container py-5">

      <div class="row py-5 ">
             <div class="col-lg-5 m-auto  text-center">
              <h1>New Arrivals</h1>
              <h6 style=" color: rgb(44, 122, 181);">New Products:</h6>
             </div>
      </div>
         
      <div class="row ">


        <div class="col-md-12">



                @if($newArrivals)




        <div class="wrapper">
  
  
          <!--Product Tranding view-->
        @forelse($newArrivals as $product)
        <div class="col-md-3 ">
          <div class="product-card" style="width:18rem;">
              <div class="product-card-img">
                  
                     <label class="stock bg-primary">New</label>
                     
                  
  
                  
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
  
        
  
  @else
  
  <div class="col-md-12">
    <div class="p-2">
      <h4>No Products Available</h4>
    </div>
  </div>
  
  @endif




        </div>

        
  

        
      </div>


          <div class="row">
            <div class="col-lg-6 text-center m-auto">
              <a href="{{route('new.arival')}}"><button class="btn2">Click For More</button></a>
            </div>
          </div>
    </div>
  </section>




  <section class="product-featured">
    <div class="container py-5">

      <div class="row py-5 ">
             <div class="col-lg-5 m-auto  text-center">
              <h1>Featured</h1>
              <h6 style=" color: rgb(44, 122, 181);">Featured Products:</h6>
             </div>
      </div>
         
      <div class="row ">


        <div class="col-md-12">



                @if($featured)




        <div class="wrapper">
  
  
          <!--Product Tranding view-->
        @forelse($featured as $product)
        <div class="col-md-3 ">
          <div class="product-card" style="width:18rem;">
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
  
        
  
  @else
  
  <div class="col-md-12">
    <div class="p-2">
      <h4>No Products Available</h4>
    </div>
  </div>
  
  @endif




        </div>

        
  

        
      </div>


          <div class="row">
            <div class="col-lg-6 text-center m-auto">
              <a href="{{route('feature.products')}}"><button class="btn2">Click For More</button></a>
            </div>
          </div>
    </div>
  </section>




  <section class="about">
    <div class="container py-5">
      <div class="row py-5">
        <div class="col-lg-8 m-auto text-center">
          <h1>Welcome to our electronics shop</h1>
          <h6 style="color: rgb(44, 122, 181);">About us:</h6>
        </div>
        <div class="row">
         



           <div class="col-lg-4">
            <a href="{{route('benefits')}}" class="a">
               <img src="{{URL('examples-img/sebastian-herrmann-NbtIDoFKGO8-unsplash.jpg')}}" class="img-fluid mb-3" alt="">
                    <h5>Our benefits</h5>
                    <p>
                      Explore a wide selection of benefits that our site offers you.
                    </p>
                    </a>
                   </div>
            
                   
                  


          <div class="col-lg-4">
            <a href="{{route('terms&conditions')}}" class="a">
            <img src="{{URL('examples-img/medicalert-uk-1S2bADB9ckk-unsplash.jpg')}}" class="img-fluid mb-3" alt="">
            <h5>Our Terms and Conditions</h5>
            <p>
              By using this site, you should consider its terms and conditions.
            </p>
            </a>
            
          </div>


          <div class="col-lg-4">
            <a href="{{route('policy')}}" class="a">
              <img src="{{URL('examples-img/markus-winkler-j2tExQL-OyA-unsplash.jpg')}}" class="img-fluid mb-3" alt="">
            <h5>Privacy & Policy</h5>
            <p>
              By using this site, you should consider its Privacy and Policy.
            </p>
            </a>
          </div>

          
        </div>
      </div>
    </div>
  </section>


  


  <section class="contact py-5">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-5 m-auto text-center">
          <h1>Contact Us</h1>
          <h6 style="color: rgb(44, 122, 181)">Always Be In Touch With Us</h6>
        </div>
      </div>
  

      <!--Contact Us-->
            <livewire:contact-us />
  <!--End Contact Us-->


@include('extenders.footer')


@endsection
