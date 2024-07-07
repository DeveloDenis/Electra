@extends('extenders.layout')


@section('title','Our Benefits')


@section('style')


<style>


:root{
            --primary-color: #0a1118;
            --primary-color-highlight: #233D54;
            --bs-body-bg: #FBF0F6;
            --bs-body-font-family: 'Montserrat', sans-serif;

        }

        html,body{
  width:100%;
  height:100%;
  margin:0px;
  padding:0px;
  overflow-x:hidden;
}

        .container-custom{
            width: 100%;
            padding: 0 1rem ;
            margin: 0 auto;

        }

        @media (min-width: 1200px){

            .container-custom{
            width: 1140px;
            

        }

        }


        @media (min-width: 1400px){

          .container-custom{
             width: 1340px;


             }

         }


         @media (min-width: 1600px){

           .container-custom{
            width: 1520px;


            }

          }


        .hero{
            background: url('examples-img/christina-wocintechchat-com-FPQlXQtjkqU-unsplash.jpg');
             background-repeat:no-repeat;
              background-size: cover;
            height:100vh;
             background-position: 50% 50% ;
             width:100%;
             margin-top:70px;
             
            
        }

        .image{
            height:100vh;
            width:100%;

            background-color: rgba(24, 16, 3, 0.519);

        }

        @media(min-width: 1400px){

            .hero__heading{
              font-size: 3.2rem; 
        }

        }

        


        .herro__content{
            z-index:1;
        }

        .hero__content-width{
            max-width: 1240px;

        }


        .hero__scroll-btn{
            position: relative;
            left: 50%;
            bottom: 50px;
            transform: translateX(-50%);
            z-index: 1;
            color: var(--bs-light);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;

        }


        .hero__scroll-btn:hover{
            color: var(--bs-light);
            opacity: 0.8;
            
        }


        .hero__scroll-btn .bi{

            transition-delay: 0.8s;
            animation: bounce 1s infinite alternate;
        }



        @keyframes bounce{
            from{
                transform: translateY(0px);

            }
            to{
                transform: translateY(-10px);
            }
        }


        .steps{

            padding-top: 40px ;
            padding-bottom: 40px;

        }


        

        .steps__section-thumbnail{

            height: 240px;
            object-fit: cover;
            margin: 0 auto;

        }

        .steps__content-width{
            max-width: 456px;
            margin: 0 auto;

        }


        @media(min-width: 544px){

          .steps{

            padding-top: 80px ;
            padding-bottom: 80px;

          }

          .steps__section-thumbnail{

            height: auto;


           }
        }


        .steps--background{
            background-color: #FEF8F9;
        }

        

</style>


@endsection



@section('content')


@include('extenders.navbar')


<section class="hero">

    <div class="image">
       <div class="herro__content h-100 container-custom  position-relative">


           <div class="d-flex h-100 align-items-center hero__content-width">


               <div class="text-white hero_subtitles">
                   <h1 class="hero__heading fw-bold mb-4 text-center">Discover the Benefits of Shopping for Electronic Products on Our Site</h1>

                   <p class="lead mb-4 text-center">In the digital age we live in, electronic products have become an integral part of our daily lives. From smartphones and laptops to wearable gadgets and smart home equipment, these products make our lives easier, more connected and more fun.</p>

                   <p class="lead text-center mb-5">When it comes to purchasing these products, a website that specializes in selling electronics can be your trusted partner.</p>

                   <p class="lead  text-center " >Here are some benefits you can experience when you choose to buy from our site:</p>
               </div>
           </div>
       </div>
     

       <a href="#scroll-down" class="hero__scroll-btn mb-5">
           Explore<br/> 

           <i class="fa-solid fa-arrow-down bi"></i>
       </a>
    </div>


</section>


<a id="scroll-down" href=""></a>


<section class="steps container-custom">


<div class="row">
   <div class="col-12 col-sm-6 d-md-flex justify-content-md-center">
          <img src="{{URL('examples-img/julian-o-hayon-Bs-zngH79Ds-unsplash.jpg')}}" class="img-fluid pb-4 steps__section-thumbnail" width="553" height="746" Loading="lazy">
   </div>

   <div class="col-12 col-sm-6 align-self-center justify-content-md-center">

        <div class="steps__content-width">
           <span>01</span>

           <h1 class="h2 mb-4">Variation and Diversity</h1>
           <p class="mb-4">Our website offers a wide range of electronic products, from the latest smartphones, tablets, laptops and computers. With such a wide variety of products available, you'll easily find exactly what you're looking for, whether you need something for personal or professional use.</p>
           
        </div>

   </div>
</div>



</section>



<section class="steps steps--background ">

<div class="container-custom">


   <div class="row">
       <div class="col-12 col-sm-6 d-md-flex justify-content-md-center order-sm-1">
              <img src="{{URL('examples-img/towfiqu-barbhuiya-0ZUoBtLw3y4-unsplash.jpg')}}" class="img-fluid pb-4 steps__section-thumbnail" width="553" height="746" Loading="lazy">
       </div>

       <div class="col-12 col-sm-6 align-self-center justify-content-md-center">

            <div class="steps__content-width">
               <span>02</span>

               <h1 class="h2 mb-4">Certified quality</h1>
               <p class="mb-4">We are committed to providing the highest quality products to our customers. We only work with reputable brands and trusted manufacturers to ensure that every product our site sells is reliable, performing and durable. You can be sure that you will receive only genuine and original products when you buy from us.</p>
              
            </div>

       </div>
   </div>


</div>






</section>



<section class="steps container-custom">


<div class="row">
   <div class="col-12 col-sm-6 d-md-flex justify-content-md-center">
          <img src="{{URL('examples-img/angele-kamp-_XlhZVsKykw-unsplash.jpg')}}" class="img-fluid pb-4 steps__section-thumbnail" width="553" height="746" Loading="lazy">
   </div>

   <div class="col-12 col-sm-6 align-self-center justify-content-md-center">

        <div class="steps__content-width">
           <span>03</span>

           <h1 class="h2 mb-4">Attractive Prices and Special Offers</h1>
           <p class="mb-4">We understand that price is an important factor in the purchasing decision-making process. That's why we strive to offer competitive prices and special offers to make the shopping experience more accessible and enjoyable for our customers. Whether we're on sale or have special promotions, you'll always find great opportunities to save money when you shop with us.</p>
           
        </div>

   </div>
</div>



</section>




<section class="steps steps--background ">

<div class="container-custom">


   <div class="row">
       <div class="col-12 col-sm-6 d-md-flex justify-content-md-center order-sm-1">
              <img src="{{Url('/examples-img/scott-graham-5fNmWej4tAA-unsplash.jpg')}}" class="img-fluid pb-4 steps__section-thumbnail" width="553" height="746" Loading="lazy">
       </div>

       <div class="col-12 col-sm-6 align-self-center justify-content-md-center">

            <div class="steps__content-width">
               <span>04</span>

               <h1 class="h2 mb-4">Professional Help Desk</h1>
               <p class="mb-4">Our dedicated customer support team is always available to help with any questions or concerns you may have. From assistance in the purchase process to after-sales support and problem solving, we ensure that every customer receives the highest quality service and that their buying experience is pleasant and worry-free.</p>
              
            </div>

       </div>
   </div>


</div>






</section>


@include('extenders.footer')
@endsection