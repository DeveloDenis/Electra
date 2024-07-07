@extends('extenders.layout')

@section('title','Cart')


@section('style')

<style>

html,body{
      width:100%;
      height:100%;
      margin:0px;
      padding:0px;
      overflow-x:hidden;
    }

    .cart-page{
                 margin: 80px auto;

        }

        table{
            width:100%;
            border-collapse: collapse;
        }

        .cart-info{
            direction:flex;
            flex-wrap: wrap;

        }

        th{
            text-align:left;
            padding: 5px;
            color: #fff;
            background: #1b6ef5;
            font-weight: normal;
        }

        td{
             padding:10px 5px;
             
        }

        td input{
            width: 40px;
            height: 30px;
            padding: 5px;

        }

        td a{
            color: #2062f0;
            font-size:12px;
        }

        td img{
            width:80px;
            height:80px;
            margin-right: 10px;
        }

        .total-price{
            display: flex;
            justify-content: flex-end;

        }

        .total-price table{
            border-top: 3px solid #2062f0;
            width:100%;
            max-width:400px;

        }

        td:last-child{
            text-align:right;
        }

        th:last-child{
            text-align:right;
        }



        


        

        @media only screen and (max-width: 600px){

            .cart-info p{
                display:none;
                
            }
        }

</style>

@endsection


@section('content')

@include('extenders.navbar')

<livewire:user.carts :carts="$carts" />
  


@include('extenders.footer')
@endsection