@extends('extenders.layout')

@section('title','Login on your account')

@section('style')

<style>
*{
    padding:0%;
    margin: 0;
    box-sizing:border-box;
}




.wrapper{
        background: #ececec;
        padding: 0 20px 0 20px;

      }

      .main{
        display:flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
       

      }

      .ohh{
        width: 900px;
        height: 550px;
        border-radius: 10px;
        background: #ffffff;
        box-shadow: 5px 5px 10px 1px rgba(0,0,0,0.2);
      }

      img{
        width: 35px;
        position: absolute;
        top: 30px;
        left: 30px;

      }

      .side-image{
        background-image: url('examples-img/headphones-laptop-home.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position:center;
        position:relative;
        border-radius: 10px 0 0 10px;
      }

      .text{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }

      

     

      .right{
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
      }

      .input-box{
        width: 330px;
        box-sizing: border-box;

      }

      .input-box header{
            font-weight: 700;
            text-align: center;
            margin-bottom: 45;

      }

      .input-field{
        display: flex;
        flex-direction: column;
        position: relative;
        padding: 0 10px  0 10px;
      }

      .input{
        height: 45px;
        width: 100%;
        background: transparent ;
        border: none;
        border-bottom: 1px solid rgba(0,0,0,0.2);
        outline: none;
        margin-bottom: 20px;
        color: #40414a;
      }

      .input-box .input-field label{
            position: absolute;
            top: 10px;
            left: 10px;
            pointer-events: none;
            transition: .5s;
            color: rgb(32, 67, 154);
            font-weight:200;

      }

      .input-field .input:focus ~ label{
            top: -10px;
            font-size: 13px;
            color: rgb(56, 95, 195);
      }


      .input-field .input:valid ~ label{
            top: -10px;
            font-size: 13px;
            color: rgb(56, 95, 195);

      }

      .input-field .input:focus, .input-field .input:valid{
           border-bottom: 1px solid #17C346;

      }

      .submit{
        border: none;
        outline: none;
        height: 45px;
        background: #2C7FCA;
        color:#ffffff;
        border-radius: 5px;
        transition: .4s;
      }

      .submit:hover{
             background: #17C346;
             color: #ffffff;
      }

      .sigin{
        text-align: center;
        font-size: small;
        margin-top: 25px;
      }

      span a{
        text-decoration: none;
        font-weight: 700;
        color: #000;
        transition: .5s;
      }

      span a:hover{
        text-decoration: underline;
        color: #2C7FCA;
      }

      @media only screen and (max-width: 768px){
        .side-image{
          border-radius: 10px 10px 0 0;
        }

        img{
          width:35px;
          position: absolute;
          top: 20px;
          left: 47%;
        }

        .text{
          position:absolute;
          top: 70%;
          text-align: center;
        }

        .text p,i{
          font-size: 17px;
          
        }

        .row{
          max-width: 420px;
          width: 100%;
        }
      }

      .p{
        color:white;
        font-size:1.5rem;
      }
</style>
@endsection

@section('content')

@include('extenders.navbar')


<div class="wrapper">
    <div class="container main">
        <div class="row ohh">
            <div class="col-md-6 side-image">


                

                 <div class="text text-center">
                   <p class="p">Login to our shop! </p>
                 </div>
            </div>

            <div class="col-md-6 right">
                  <div class="input-box">

                      @if(session()->has('success'))
                          
                      <div class="alert alert-success alert-dismissible fade show">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>


                      @endif

                      @if(session()->has('error'))

                      <div class="alert alert-danger alert-dismissible fade show">
                        {{session('error')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>

                      @endif

                      @if(session()->has('info'))

                       <div class="alert alert-light alert-dismissible fade show">
                        {{session('info')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                       </div>


                      @endif

                           <form action="{{route('login.post')}}" method="post">
                            @csrf
                    <header>Login on your account</header>

                    

                    <div class="input-field">
                        <input type="text" class="input" name="email" required autocomplete="off"> 
                        <label for="email">Email</label>
                    </div>

                    @error('email')

                     <div class="text-danger">
                      {{$message}}
                     </div>


                    @enderror

                    <div class="input-field">
                        <input type="password" class="input" name="password" required>
                        <label for="password">Password</label>
                    </div>
                        
                    @error('password')
                    <div class="text-danger">
                      {{$message}}
                    </div>
                    @enderror

                    <div class="row my-3">
                      <div class="col">

                      </div>
                      <div class="col">
                        <a href="{{route('forgot.password.form')}}">Forgot Password?</a>
                      </div>
                      
                    </div>

                    <div class="input-field">
                        <input type="submit" class="submit" id="email" value="Login">
                        
                    </div>

                  </form>

                    <div class="sigin">
                        <span>If dont have an account <a href="{{route('user.register')}}">Sign in</a>!</span>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>

@include('extenders.footer')

@endsection