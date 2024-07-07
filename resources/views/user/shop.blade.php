@extends('extenders.layout')

@section('title','Shop')

@section('style')

<style>



body{
            background: #f1fbff;

         }

         html,body{
      width:100%;
      height:100%;
      margin:0px;
      padding:0px;
      overflow-x:hidden;
    }

      

      .carousel{
        margin-top:100px;
      }


         .section-padding{
            padding: 100px 0
         }

         


        .carousel-item{
           
            height: 90vh;
            min-height: 300px;

        }

        

        .carousel-caption{
            bottom:220px;
            z-index: 2;
        }

        .carousel-caption h5{
            font-size:45px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-top: 25px;
            color:white;

        }


        .carousel-caption p{
            width: 60%;
            margin: auto;
            font-size: 1.5rem;
            line-height: 1.9;
        }


        .carousel-inner::before{
              content: '';
              position:absolute;
              width: 100%;
              height: 100%;
              
              top: 0;
              left: 0;
              background: rgba(0, 0, 0, 0.7);
              z-index:1;
        }

        

        #span2{
            color: #c2cf08;

        }

       

       

        

       

        .p1{
            font-size:1.5rem;
            color:rgb(203, 203, 203);
        }





        @media only screen and (min-width: 768px) and (max-width: 991px){
            .carousel-caption{
                top: 50px;

            }

            .carousel-caption p{
                 width: 100%;

            }

            .carousel-item img{
             
             height:100%;
        }
        }

        

        @media only screen and  (max-width:1200){

          .carousel-caption{
                top: 50px;

            }

            .carousel-caption p{
                 width: 100%;

            }

            .carousel-item img{
             
             height:100%;
        }

}

        @media only screen and (max-width: 767px){
            

            .carousel-caption{
                bottom: 125px;
            }

            .carousel-caption h5{
                font-size: 18px;
            }

            .carousel-caption .p1{
                width:100%;
                line-height: 1.6;
                font-size: 12px;

            }

            .carousel-caption a{
                 padding: 10px 15px;
            }

            .row2{
            margin-left:10px;
            width:1350px;
          }

          .carousel-item img{
             
             height:100%;
        }
        }
        /*end home content*/


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


.line{
  background-color:rgb(7, 129, 236);
  width:200px;
  height:3px;
  margin-left:660px;
}

.h63{
  border-bottom: 3px  solid rgb(0, 174, 255) ;
}


.row2{
  margin-left:90px;
  width:1350px;
}




@media only screen and (min-width:1024px) and (max-width:1024px){

.line{
  background-color:rgb(7, 129, 236);
  width:200px;
  height:3px;
  margin-left:400px;
}



}










@media only screen and (min-width:1024px) and (max-width:1024px){

  .row2{
  margin-left:5px;
  width:900px;

  justify-content: center;
}

.col-md-3{

  margin-left:20px;

  
}

.carousel-caption{
                top: 50px;

            }

            .carousel-caption p{
                 width: 100%;

            }

            .carousel-item img{
             
             height:100%;
        }


        .line{
  background-color:rgb(7, 129, 236);
  width:200px;
  height:3px;
  margin-left:400px;
}

}


@media only screen and (min-width:820px) and (max-width:820px) {

  .row2{
  
  width: 900px;

  justify-content: center;
}


.column{
  margin-right:10px;
}

.line{
  background-color:rgb(7, 129, 236);
  width:200px;
  height:3px;
  position:relative;
  left:215px;
}

}

@media only screen and (min-width:768px) and (max-width:768px) {

.row2{

width: 900px;

justify-content: center;
}


.column{
  margin-right:10px;
}


.line{
background-color:rgb(7, 129, 236);
width:200px;
height:3px;
position:relative;
left:195px;
}

}





@media only screen and (max-width: 430px;){



  .row2{
  margin-left:120px;
  width:1350px;
}

}


        @media screen and (max-width:1000px){
          #product-cards .card h3{
            font-size: 18px;

          }

          .line{
            background-color:rgb(7, 129, 236);
  width:200px;
  height:3px;
  margin-left:90px;
          }


          .row2{
            margin-left:30px;
            width:500px;
          }

          
        }


        @media only screen and (max-width:375px){

.line{
   background-color:rgb(7, 129, 236);
     width:175px;
     height:3px;
     margin-left:300px;
    }


}


       @media only screen and (max-width:360px){

        .line{
           background-color:rgb(7, 129, 236);
             width:175px;
             height:3px;
             position:relative;
             left:1px;
            }


       }

       


        .h61{
          font-size:1.3rem;
        }

        /* End Product Cards*/

</style>    



@endsection


@section('content')

@include('extenders.navbar')

<section class="home my-5">

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="examples-img/christopher-gower-_aXa21cf7rY-unsplash.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
              <h5>Electronic Products Up to <span id="span2">%50</span> Off</h5>
              <p class="p1">Discover the world of technology at half price!Enjoy incredible discounts on a wide range of high quality electronic products.From smart gadgets to multimedia equipment, find exclusive offers and bring innovation to your life at half the regular price. The perfect opportunity to upgrade your digital lifestyle!</p>
              <p><a href="{{route('discount')}}" class="btn btn-primary mt-3">View Now</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="examples-img/ian-dooley-3NCA3tbaE5I-unsplash.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Get to know the best performing products on our website!</h5>
              <p class="p1">Explore our online store to be able to choose the right electronic product for you!</p>
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="examples-img/jess-bailey-q10VITrVYUM-unsplash.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Receive our help and support!</h5>
              <p class="p1">Contact us to help you with the problems or complaints you have with the purchased product!</p>
              <p><a href="{{route('contact-us')}}" class="btn btn-primary mt-3">Contact Us</a></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

</section>


<section class="body">
<div class="container mb-5" id="product-cards">
    <h1 class="text-center">Welcome to Electra electronics shop</h1>
    <div class="row">

      <div class="col-md-12 py-3 py-md-0">
         <p class="text-center">


          Explore our variety of electronic products!<br/>

          By ordering from our website, your product will arrive at your home in less than 3 days!
           

         </p>
      </div>
    </div>
   

    <div class="row my-3" style="margin-top: 30px;">

      <div class="col-md-12">
        <h4>Trending Products:</h4>

      </div>

      @if($trendingProducts)




      <div class="wrapper">


        <!--Product Tranding view-->
      @forelse($trendingProducts as $product)
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


<livewire:user.shopp :products="$products"/> 

</div>

</section>

@include('extenders.footer')

@endsection

