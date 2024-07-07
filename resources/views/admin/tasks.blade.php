@extends('extenders.layout')


@section('title','Your Tasks')


@section('style')

<style>

html,body{
  width:100%;
  height:100%;
  margin:0px;
  padding:0px;
  overflow-x:hidden;
}

.contsiner1{
    margin-top:100px;
}


.login{
            
            height: min-content;
            padding: 20px;
          
            background: #ffffff;
            border-top: solid 2px #1AB6D6;
            border-bottom: solid 2px #1AB6D6;

            
        }


        .col{
            
            padding: 20px;
            
            background: #ffffff;
            
            border-bottom: solid 2px #1AB6D6;
        }


        .login h1{
            font-size: 36px;
            margin-bottom: 25px;

        }

        .login form{
            font-size: 20px;

        }


        .login form .form-group{
            margin-bottom: 12px;

        }

        .login form input[type="submit"]{
            font-size: 20px;
            margin-top: 15px;
            
        }

        i.fa {
  -webkit-animation: show 1s 1;
  /* any other properties to override from FontAwesome's default .fa rule */
}
@-webkit-keyframes show {
  0% { opacity: 0; }
  100% { opacity: 1; }
}

</style>

@endsection


@section('content')

@include('extenders.navbar-admin')



<div class="contsiner1">

<livewire:admin.tasks />




</div>




@endsection