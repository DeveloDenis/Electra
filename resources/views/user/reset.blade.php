@extends('extenders.layout')


@section('title','User Change Password')


@section('style')


<style>


    *{
        padding:0%;
        margin: 0;
        box-sizing:border-box;
    }
    
    body{
        padding-top: 200px;
        background-color: #F3F3F3 ;
    }
    
    .form-signup{
                margin: 0 auto;
                max-width: 400px;
                background-color: rgb(252, 252, 252);
    
            }
    
            .btn:hover{
                background-color: blue;
                color:white;
            }
    
            .form-signup h2{
                 text-align:center;
            }

            .col-md-6{
                width: 300px;
            }
    
            input{
                width: 180px;
            }
    </style>

@endsection

@section('content')

<div class="container my-5 text-center align-items-center">
    <form class="form-signup" action="{{route('reset.password.form')}}" method="POST">
        @csrf
        <h2>Update Password</h2>
        <p>Update your password and after that you can login</p>

        @if(session()->has('success'))

        <div class="alert alert-success alert-dismissible fade show">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

        @endif

        @if(session()->has('fail'))

        <div class="alert alert-danger alert-dismissible fade show">
            {{session('fail')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

        @endif

        <div class="form-group" >
            
            <input type="hidden" name="token" value="{{$token}}">



            <div class="row ">
                

                <div class="col-md-6">
                    <input type="email" class="form-control my-3" name="email" placeholder="Put your new password" value="{{$email ?? old('email')}}" autocomplete="off">
                </div>
                @error('email')
                      <div class="text-danger">
                        {{$message}}
                      </div>
               
                @enderror

                
            </div>



            <div class="row">
                <div class="col-md-6">
                    <input type="password" class="form-control my-3" name="password" placeholder="Put your new password" autocomplete="off">
                </div>
                @error('password')
                      <div class="text-danger">
                        {{$message}}
                      </div>
               
                @enderror
            </div>

            
            
        </div>

        <input type="submit" class="btn btn-primary btn-block my-3" value="Update password">

        
    </form>
</div>

@include('extenders.footer')

@endsection