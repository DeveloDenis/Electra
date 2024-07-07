<style>

    .footer{
      background-color: black;
      color: white;
    }
    
    .footer a{
      text-decoration:none;
      color:white;
       margin:0;
    }
    
    </style>
    
    
    
    <section class="footer py-5">
        <div class="container text-center py-5">
             <div class="row">
              
                <div class="col-lg-11">
                  <div class="row">
                    <div class="col-lg-3">
                      <h5  class="pb-3">HELP</h5>
                      <a class="p" href="{{route('contact-us')}}">Contact Us</a><br/>
                      <p class="p" ><a  href="{{route('return')}}">Return and exchange</a></p><br/>
                      
                    </div>
    
                    <div class="col-lg-3">
                      <h5  class="pb-3">Quick Links</h5>
                      <a class="p" href="{{route('user.menu')}}">Home</a><br/>
                      <a class="p" href="{{route('benefits')}}">About Us</a><br/>
                      <a class="p" href="{{route('contact-us')}}">Contact Us</a><br/>
                      <a class="p" href="{{route('terms&conditions')}}">Terms & Conditions</a><br/>
                      <a class="p" href="{{route('policy')}}">Privacy & Policy</a><br/>
                    </div>
    
                    <div class="col-lg-3">
                      <h5  class="pb-3">Shop Now</h5>
                      <a class="p" href="{{route('user.collections')}}">Collections</a><br/>
                      <a class="p" href="{{route('new.arival')}}">Trending</a><br/>
                      <a class="p" href="{{route('new.arival')}}">New Arrivals Products</a><br/>
                      <a class="p" href="{{route('feature.products')}}">Featured Products</a><br/>
                      @auth

                      <a class="p" href="{{route('view.cart')}}">Cart</a><br/>

                      @endauth
    
                    </div>
    
                    <div class="col-lg-3">
                      <h5 class="pb-3">Reach Us</h5>
                      <p><i class="fa-solid fa-location-dot" style="color:#ffffff;"></i>{{$appSetting->address ?? 'address'}}</p>
                      <p><i class="fa-solid fa-phone" style="color: #ffffff;"></i>{{$appSetting->phone1 ?? 'phone number'}}</p>
                      <p><i class="fa-solid fa-envelope" style="color:#ffffff"></i>{{$appSetting->email1 ?? 'email'}}</p>

                       @if($appSetting->facebook)
                      <span><a href="{{$appSetting->facebook}}" target="_blank"><i class="fa-brands fa-facebook" style="color:#ffffff; font-size:2.5rem; cursor: pointer; padding-right:5px"></i></a></span>
                       @endif

                       @if($appSetting->instagram)
                      <span><a href="{{$appSetting->instagram}}" target="_blank"><i class="fa-brands fa-instagram" style="color:#ffffff; font-size:2.5rem; cursor: pointer; padding-right:5px"></i></a></span>
                       @endif
                        
                       @if($appSetting->twitter)
                      <span><a href="{{$appSetting->twitter}}" target="_blank"><i class="fa-brands fa-x-twitter" style="color:#ffffff; font-size:2.5rem; cursor: pointer; padding-right:5px"></i></a></span>
                       @endif

                       @if($appSetting->google)
                      <span><a href="{{$appSetting->google}}" target="_blank"><i class="fa-brands fa-google-plus-g" style="color:#ffffff; font-size:2.5rem; cursor: pointer; padding-right:5px"></i></a></span>
                      @endif
                    </div>
                  </div>
                </div>
              
             </div>
          </div>
          <hr>
          <p class="text-center">Copyright @2024 All rights reserved | This template is made with by Denis</p>
        </div>
      </section>