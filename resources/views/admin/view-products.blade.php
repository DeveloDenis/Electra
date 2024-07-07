@extends('extenders.layout')

@section('title','View Products')


@section('style')
<style>
.search{
    margin-top: 90px;
}

.checked{
    color:#ffe400;
}


</style>
@endsection

@section('content')

@include('extenders.navbar-admin')

<div class="container1">


  <form action="{{route('view.products')}}" method="GET" class="d-flex search" role="search">
    <input class="form-control me-2" type="text" name="search2" placeholder="Search" aria-label="Search" autocomplete="off">

    <select name="type">
      <option selected disabled>Chose the type of  product</option>
      @forelse($categories as $category)
       <option name="type"  value="{{$category->id}}">{{$category->name}}</option>

       @empty

       <option  >No category Available</option>
       @endforelse
    </select>
<button class="btn btn-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
  </form>


  

  @if(session()->has('success'))
                          
                      <div class="alert alert-success alert-dismissible fade show">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>


                      @endif


                      @if(session()->has('error'))
                          
                      <div class="alert alert-danger alert-dismissible fade show">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>


                      @endif

                
@if(count($products) > 0)

<table class="table table-striped table-hover text-center my-5">
    <thead>
        <tr>
          <th scope="col">Prouduct ID</th>
          <th scope="col" >Product Name</th>
          <th scope="col">Category</th>
          <th scope="col"> Description</th>
          <th scope="col" style="width:200px;">Product Rated</th>
          <th scope="col">Product Price</th>
          <th scope="col">Shipping Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Status</th>
          <th scope="col">Created at</th>
          <th scope="col">Actions</th>
          
          
          
        </tr>
      </thead>
      <tbody>
             @foreach($products as $product)
        <tr>
          <td>{{$product->id}}</td>
          <td><a href="{{route('view.product',$product->id)}}">{{$product->name}}</a></td>
          <td>
            @if($product->category)
            {{$product->category->name}}
           
               
           @else

           <h6>No category </h6>
               
           @endif
          
          </td>
          <td>{{$product->small_description}}</td>
          <td style="width:200px;">                    <!--NewStars -->

            @php

             $ratings = App\Models\Rating::where('prod_id', $product->id)->get();
              $rating_sum = App\Models\Rating::where('prod_id', $product->id)->sum('stars_rated');
  

              if($ratings->count() > 0){

                $rating_value = $rating_sum/$ratings->count();

                }
                 else{
                $rating_value = 0;
                  }


           @endphp


             @php $ratenum = number_format($rating_value) @endphp


             @php
                 for($i = 1; $i <= 5; $i++) {
                 if($i <= $ratenum) {
                   echo '<i class="fa fa-star checked"></i>';
                    } else {
                    echo '<i class="fa fa-star"></i>';
                      }
                       }
              @endphp

              ({{$ratings->count()}})
             <!--End NewStars-->
</td>
          <td>${{$product->selling_price}}</td>
          <td>${{$product->shipping_price}}</td>
          <td>{{$product->quantity}}</td>
          <td>{{$product->status == '1' ? 'Hidden':'Active'}}</td>
          <td>{{$product->created_at}}</td>
          
          
          <td>
            
                <a href="{{route('delete.product',$product->id)}}" onclick="return confirm('Are you sure , you want to delete this product?')" class="btn btn-danger mb-3"><i class="fa-solid fa-trash" style="color:#fff;"></i>Delete</a><br>
            
            <a href="{{route('edit.product',$product->id)}}"><button class="btn btn-success mb-3"><i class="fa-solid fa-pen" style="color:#fff;"></i> Update Product</button></a>

            @if($product->specificationCase || $product->specificationGeneral || $product->specificationMemory || $product->specificationMotherboard || $product->specificationMultyMedia || $product->specificationPhotoVideo || $product->specificationProcessor || $product->specificationDisplay || $product->specificationStorage || $product->specificationVideoCard)


            <a href="{{route('specification.edit',$product->id)}}"><button class="btn btn-success"><i class="fa-solid fa-file-lines" style="color:#ffffff;"></i>Update Specification</button></a>


            @else
            <a href="{{route('specification_create',$product->id)}}"><button class="btn btn-primary"><i class="fa-solid fa-file-lines" style="color:#ffffff;"></i>Add Specification</button></a>

            @endif
          </td>
        </tr>

        

        
       @endforeach
       
       
    </table>
 
    {{$products->links()}}
    
@else
    
<p class="text-center">Products dont exsists</p>
                     
          
    @endif

    

   
    
        
  
     
    



</div>






@endsection
