<style>



    .navbar-brand{
        font-size: 2rem;
        color: black;
        font-family: "Roboto Mono", monospace;
    
    }
    
    .navbar-brand:hover{
        color: black;
        font-family: "Roboto Mono", monospace;
    }
    
    .nav-link{
        margin-right: 5px;
        margin-left: 5px;
        color: black;
        text-transform: uppercase;
        font-family:'Rubik', sans-serif;
    
    }
    
    .nav-link:hover{
        color: black;
    
    }
    
    
    .navbara{
      text-decoration:none;
      color: #000;
      cursor: pointer;
    }
    
    .navbar2{
      height:30px;
      
    }

    .navbar1{
      margin-top:30px;
    }


    @media only screen and (min-width:1000px) and (max-width:1024px){


.nav-link{

  font-size:0.6rem;


}


.navbara{

  font-size:0.8rem;
}


  

}


    
    
    </style>
    
    

    <nav class="navbar fixed-top  navbar-expand-lg navbar2 bg-warning ">
          
      <h5 class="mx-auto"><i class="fa-solid fa-triangle-exclamation"></i>Warning! This is a  website test  !<i class="fa-solid fa-triangle-exclamation"></i></h5>

</nav>
    
    <nav class="navbar fixed-top navbar1   navbar-expand-lg bg-body-tertiary  ">

     

          <div class="container">
            <p class="navbar-brand " ><i class="fa-solid fa-bolt" style="color: #023ef1;"></i>{{$appSetting->website_name ?? 'website name'}}</p>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav m-auto my-2 my-lg-0 " >
                <li class="nav-item">
                  <a class="{{Route::is('user.menu') ? 'bg-primary text-light rounded-pill' : ''}} nav-link active"  href="{{route('user.menu')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  {{Route::is('user.shop') ? 'bg-primary text-light rounded-pill' : ''}}" href="{{route('user.shop')}}">Go To Shop</a>
                </li>
                
                
      
                
  
  
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    View
                  </a>
                  <ul class="dropdown-menu">
  
                    <li><a class="{{Route::is('user.collections')||Route::is('shop.category') ? 'bg-primary text-light rounded-pill' : ''}} dropdown-item " href="{{route('user.collections')}}"  >
                      Product Categories
                    </a></li>
                    <li><a class="{{Route::is('new.arival') ? 'bg-primary text-light rounded-pill' : ''}} dropdown-item " href="{{route('new.arival')}}">New Products</a></li>
                    <li><a class="{{Route::is('feature.products') ? 'bg-primary text-light rounded-pill' : ''}} dropdown-item" href="{{route('feature.products')}}">Featured Products</a></li>
                    <li >
                      <a class="{{Route::is('orders.view')||Route::is('orders.show') ? 'bg-primary text-light rounded-pill' : ''}} dropdown-item " href="{{route('orders.view')}}">Your Orders</a>
                    </li>
                  </ul>
                </li>
  
  
  
                <li class="nav-item">
                  
                  <a class="{{Route::is('contact-us') ? 'bg-primary text-light rounded-pill' : ''}} nav-link " href="{{route('contact-us')}}">Contact</a>
                </li>
  
                
  
                @auth()
                <li class="nav-item">
                  
                  <a class="nav-link " href="{{route('view.cart')}}"><i class="fa-solid fa-cart-shopping" style="color:#0372EF;"></i>Cart({{$cartCount->count()}})</a>
                </li>
                @endauth
  
                
              </ul>
  
              <form action="{{route('search.product')}}" method="GET" class="d-flex me-2" role="search">
                <input class="form-control me-2" name="search" value="{{Request::get('search')}}" type="search" placeholder="Search Product" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
              </form>
              
                @guest()
              <div class="nav-link">
                <a class="navbara {{Route::is('user.login') ? 'bg-primary text-light rounded-pill ' : ''}}btn btn-primary text-white " href="{{route('user.login')}}">Login</a>
            </div>
              
              <div class="nav-link">
                  <a class="navbara {{Route::is('user.register') ? 'bg-primary text-light rounded-pill ' : ''}}btn btn-primary text-white " href="{{route('user.register')}}">Register</a>
              </div>
      
      
              @endguest
      
              
              @auth()
              
  
                   <div class="nav-item">
                <div class="nav-link">
                  
                  <a class="navbara {{Route::is('user.profile') ? 'bg-primary text-light rounded-pill btn btn-primary ' : ''}}" href="{{route('user.profile')}}"><i class="fa-solid fa-user" ></i></a>
                </div>
              </div>
      
                @if(Auth::user()->is_admin !== 1)
      
                  
              
                    
                @else
                    <div class="nav-item">
                  <div class="nav-link"> 
                    <a class="navbara" href="{{route('admin.menu') }}"> Admin Dashboard</a>
                  </div>
                </div>
                @endif
      
              @endauth
      
      
              
            </div>
          </div>  



         


       

            

        

        
          
        
      </nav>


    

     