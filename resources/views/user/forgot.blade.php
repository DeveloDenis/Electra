@extends('extenders.layout')

@section('title','ForgotPassword')


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
    <form class="form-signup" action="{{route('forgot.password.link')}}" method="POST">
        <h2>Forgot Password</h2>
        <p>If you forgot your password put your email to the box and we will send you an email to update your password</p>

        @if(session()->has('success'))

        <div class="alert alert-success alert-dismissible fade show">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

        @endif

        <div class="form-group">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <input type="email" class="form-control" name="email" placeholder="Put your email address" autocomplete="off">
                </div>
                @error('email')
                      <div class="text-danger">
                        {{$message}}
                      </div>
               
                @enderror
            </div>
        </div>

        <input type="submit" class="btn btn-primary btn-block my-3" value="Send">

        <p>Return to <a href="{{route('user.login')}}">Log in</a></p>
    </form>
</div>

@include('extenders.footer')
@endsection