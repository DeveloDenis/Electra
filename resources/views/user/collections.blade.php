@extends('extenders.layout')

@section('title','Categories')

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
    }

    .category-card{
    border: 1px solid #ddd;
    box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 8%);
   
    background-color: #fff;
}
.category-card a{
    text-decoration: none;
}
.category-card .category-card-img{
    max-height: 360px;
   
    overflow: hidden;
    border-bottom: 1px solid #ccc;
}
.category-card .category-card-body{
    padding: 10px 16px;
}
.category-card .category-card-body h5{
    margin-bottom: 0px;
    font-size: 18px;
    font-weight: 600;
    color: #000;
    text-align: center;
}

.categories{
    align-items:center;
}
    
        </style>

@endsection


@section('content')

@include('extenders.navbar')


<div class="py-3 py-md-5 bg-light my-5">
    <div class="container1">
        <div class="row ">
            <div class="col-md-12">
                <h4 class="mb-4">Our Categories:</h4>
            </div>

            @forelse($categories as $category)
            <div class="col-6 mt-3 col-md-3 mx-auto">
                <div class="category-card">
                    <a href="{{route('shop.category',$category->slug)}}">
                        <div class="category-card-img">
                            <img src="{{asset("$category->image")}}" class="w-100" style="height:270px;" alt="Laptop">
                        </div>
                        <div class="category-card-body">
                            <h5>{{$category->name}}</h5>
                        </div>
                    </a>
                </div>
            </div>

            @empty

                <div class="col-md-12">
                    <h5>No Categories Available</h5>
                </div>

           @endforelse

        </div>
    </div>
</div>


@include('extenders.footer')
@endsection