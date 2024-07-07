@extends('extenders.layout')


@section('title','Contact Us')

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
            margin-top:100px;
            width: 60%;
            padding: 45px;
            border-radius: 0;
            position:absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }


        .row1{
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }

        .cod7{
            padding: 20px;

        }

        .cod5{
            background-color: #1089ff;
            padding: 20px;
            color: #fff;

        }

        .formControl{
            height: 52px;
            background: #fff;
            color: #000;
            font-size: 14px;
            border-radius: 2px;
            box-sizing: none! important;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }

        .bi{
            font-size: 20px;
        }

        .gg p{
            font-size: 18px;
            padding-left: 18px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }


        @media only screen  and (max-width:600px){
            .container1{
                width:100%;
                position:absolute;
                left:50%;
                top:90%;;
            }
        } 


        @media only screen and (max-width:375px){

.container1{
      width:100%;
      position:absolute;
      left:50%;
      margin-top:250px;;
  }
}


        @media only screen and (max-width:360px){

          .container1{
                width:100%;
                position:absolute;
                left:50%;
                margin-top:100px;;
            }
        }

       

</style>


@endsection


@section('content')

@include('extenders.navbar')



<div class="container1">
    <div class="row row1">
        <div class="col-md-7 cod7">
            <h4>Get in touch</h4>

            @if(session()->has('success'))
                          
            <div class="alert alert-success alert-dismissible fade show">
              {{session('success')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>


            @endif
            <form action="{{route('send.contact')}}" method="POST">
                @csrf

              <div class="mb-3">
                <label for="exampleFormControlInput1">First Name</label>
                <input type="text" name="first_name" class="form-control formControl" id="exampleFormControlInput1" placeholder="Fisrt Name"/>

                @error('first_name')

                <div class="text-danger">{{$message}}</div>
  
                @enderror
              </div>

             

              <div class="mb-3">
                <label for="exampleFormControlInput1">Last Name</label>
                <input type="text" name="last_name" class="form-control formControl" id="exampleFormControlInput1" placeholder="Last Name"/>

                @error('last_name')

                <div class="text-danger">{{$message}}</div>
  
                @enderror
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" name="email" class="form-control formControl" id="exampleFormControlInput1" placeholder="Email Address"/>

                @error('email')

                <div class="text-danger">{{$message}}</div>
  
                @enderror
              </div>

              

              <div class="mb-3">
                <label for="exampleFormControlTextarea1">Subject</label>
                <textarea name="subject" class="form-control formControl"   id="exampleFormControlTextarea1" rows="3"></textarea>
                @error('subject')

                <div class="text-danger">{{$message}}</div>
  
                @enderror
              </div>

              <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>

        <div class="col-md-5 cod5">
               <h4>Contact us</h4><hr>

               <div class="mt-5">
                  <div class="d-flex gg">
                    <i class="fa-solid fa-location-dot" style="font-size:1.5rem;"></i>
                    <p>Address: {{$appSetting->address ?? 'address'}}</p>
                  </div><hr>

                  <div class="mt-5">
                    <div class="d-flex gg">
                        <i class="fa-solid fa-phone" style="font-size:1.5rem;"></i>
                      <p>Contact:- {{$appSetting->phone1 ?? 'phone number'}}</p>
                    </div><hr>

                    <div class="mt-5">
                        <div class="d-flex gg">
                            <i class="fa-solid fa-envelope" style="font-size:1.5rem;"></i>
                          <p>Email:- {{$appSetting->email1 ?? 'email'}}</p>
                        </div><hr>

                        <div class="mt-5">
                            <div class="d-flex gg">
                                
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
                             
                            </div><hr>


               </div>
        </div>
    </div>
</div>



@endsection