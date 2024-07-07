@extends('extenders.layout')

@section('title')

{{$category->meta_title}}



@endsection


@section('meta_keyword')

{{$category->meta_keyword}}

@endsection


@section('meta_description')

{{$category->meta_description}}

@endsection

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
        margin-top:50px;
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


.checked{
  color: #ffe400;

}



    </style>

@endsection



@section('content')

@include('extenders.navbar')

<div class="py-3 py-md-5 bg-light my-5">
    <div class="container1">

        
               
              

             

        <div class="row">
            

            <livewire:user.shop-category :category="$category"/> 
            
        </div>

    </div>


    </div>
</div>

@include('extenders.footer')
@endsection