@extends('extenders.layout')

@section('title','Out of stock Products')


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

</style>

@endsection


@section('content')

@include('extenders.navbar-admin')

<div class="container1">

  <div class="row my-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Out of stock products
                  
                </h4>
  
                
  
            </div>
  
  
  
            <div class="card-body">
  
                @if(session()->has('success'))
                          
                <div class="alert alert-success alert-dismissible fade show">
                  {{session('success')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
  
  
                @endif 
  
  
                @if(count($outOfStock))
  
                <table class="table table-bordered table-stiped">
                    <thead>
  
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>   
  
                    </thead>
  
                    <tbody>
                        @foreach($outOfStock as $product)

                       
                        <tr>
                          <td>{{$product->id}}</td>
                          <td>{{$product->name}}</td>
                          
                          <td>
                            @if($product->category)
                            {{$product->category->name}}
                           
                               
                           @else
                
                           <h6>No category </h6>
                               
                           @endif
                          </td>

                          <td>
                                 {{$product->selling_price}}
                          </td>

                          <td>

                            {{$product->quantity}}

                          </td>

                          <td>
                             
                            <a href="{{route('edit.product',$product->id)}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square" style="color:#ffffff;"></i>Edit Product</a>
  
  
                            <a href="{{route('delete.product',$product->id)}}" onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger"><i class="fa-solid fa-trash" style="color:#ffffff;"></i>Delete Product</a>
  
                          </td>
                        </tr>    
                       @endforeach
                    </tbody>
                </table>
               
  
                @else
  
                <div class="my-5 text-center">
                    <p> All products has a quantity </p>
                </div>
  
                @endif
            </div>
        </div>
    </div>
  </div>

</div>





@endsection