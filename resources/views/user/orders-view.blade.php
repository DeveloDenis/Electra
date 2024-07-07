@extends('extenders.layout')


@section('title','My order details')



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

@include('extenders.navbar')

<div class="py-3 py-md-5 container1">
    <div class="container1">
        <div class="row">
            <div class="col-md-12">
                <div class="shadow bg-white p-3">
                   


                    <h4 class="text-primary">
                        <i class="fa fa-shopping-cart text-dark"></i> My Order Details
                        <a href="{{route('orders.view')}}" class="btn btn-primary btn-sm float-end">Back</a>

                      

                    </h4>
                    <hr>
                       
                      <div class="row">
                        <div class="col-md-6">
                            <h5>Order Details</h5>
                            <hr>
                            <h6>Order Id: {{$order->id}}</h6>
                            <h6>Tracking Id/No.: {{$order->tracking_no}}</h6>
                            <h6>Ordered Date: {{$order->created_at->format('d-m-Y h:i A')}}</h6>
                            <h6>Payment Mode: {{$order->payment_mode}}</h6>
                            <h6 class="border p-2 text-success">Order Id:
       
                                Order Status Message: <span class="text-uppercase">{{$order->status_message}}</span>

                            </h6>
                        </div>

                        <div class="col-md-6">
                            <h5>User Details</h5>
                            <hr>
                            <h6>Full Name: {{$order->fullname}}</h6>
                            <h6>Email Id: {{$order->email}}</h6>
                            <h6>Phone: {{$order->phone}}</h6>
                            <h6>Country: {{$order->country}}</h6>
                            <h6>City: {{$order->city}}</h6>
                            <h6>Street: {{$order->street}}</h6>
                            <h6>Pincode: {{$order->pincode}}</h6>
                        </div>

                        <br/>

                        <h5>Order Items</h5>
                        <hr>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thaed>
                                        
                                     <th>Item ID</th>
                                     <th>Image</th>
                                     <th>Product</th>
                                     <th>Price</th>
                                     <th>Quantity</th>
                                     <th>Total</th>
                                     
  
                                </thaed>
  
                                <tbody>
                                  
                                    @php

                                     $totalPrice = 0;

                                    @endphp

                                  @foreach($order->orderItems as $orderItems)
                               
                                       <tr>
                                         <td width="10%">{{$orderItems->id}}</td>

                                         <td width="10%">

                                            @if($orderItems->product->productImages)
                                             
                                            <img src="{{asset($orderItems->product->productImages[0]->image)}}" style="width:50px; height:50px;">
                                            @else


                                            @endif

                                         </td>


                                         <td>

                                            {{$orderItems->product->name}}

                                            @if($orderItems->productColor)

                                            @if($orderItems->productColor->color)
                                                <span>Color: {{$orderItems->productColor->color->name}}</span>
                                            @endif

                                            @endif
                                         </td>
                                         
                                         <td width="10%">{{$orderItems->price}}</td>
                                         <td width="10%">{{$orderItems->quantity}}</td>
                                         <td width="10%">{{$orderItems->price* $orderItems->quantity }}</td>

                                         @php
  
                                           $totalPrice += $orderItems->price * $orderItems->quantity;

                                         @endphp
                                       </tr>

                                  

                                    @endforeach

                                    <tr>
                                        <td colspan="5" class="fw-bold">Total Amount:</td>
                                        <td colspan="1" class="fw-bold">${{$totalPrice}}</td>
                                    </tr>
                                  
  
                                </tbody>
                            </table>
                           
                        </div>
                      </div>



                </div>
            </div>
        </div>
    </div>
</div>              


@include('extenders.footer')
@endsection