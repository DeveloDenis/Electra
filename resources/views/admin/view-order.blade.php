@extends('extenders.layout')



@section('title','Order Details')


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


</style>

@endsection

@section('content')

@include('extenders.navbar-admin')


<div class="py-3 py-md-5 container1 ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shadow bg-white p-3">
                    

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


                    <h4 class="text-primary col-md-12">
                        <i class="fa fa-shopping-cart text-dark"></i>  Order Details
                        <a href="{{route('admin.orders.view')}}" class="btn btn-primary btn-sm float-end ">Back</a>
                        <a href="{{route('invoice.generate',$order->id)}}" class="btn btn-primary btn-sm float-end mx-3">
                            <i class="fa-solid fa-download"></i>Download Invoice
                        </a>

                        <a href="{{route('invoice.view',$order->id)}}" target="_blank" class="btn btn-warning btn-sm float-end mx-3">
                            <i class="fa-solid fa-eye"></i>View Invoice
                        </a>

                        <a href="{{route('orders.mail',$order->id)}}"  class="btn  btn-sm float-end mx-3" style="background-color:blueviolet;">
                            <i class="fa-solid fa-envelope"></i> Send Invoice Via Mail
                        </a>

                      

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

                                            @if($orderItems->product->productImages->count() > 0)
                                             
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
                                         <td width="10%">{{$orderItems->price * $orderItems->quantity}}</td>

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


               

                <div class="card mt-3">
                    <div class="card-body">
                        <h4>Order Process (Order Status Updates)</h4>
                        <hr>

                        @if(session()->has('error'))
                          
                        <div class="alert alert-alert alert-dismissible fade show">
                          {{session('error')}}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
        
        
                        @endif

                        <div class="row">
                            <div class="col-md-5">
                                <form action="{{route('order.update', $order->id)}}" method="POST">
                                    @csrf
                                    @method('put')



                                    <h4 class="mt-3">Order Status: <span class="text-uppercase text-success" >{{ $order->status_message }}</span></h4>
                                    

                                          <div class="row">

                                            <div class="col-md-7">
                                                <br/>
                                               
                                            </div>
    
                                            <lable>Update the Order Status</label>
                                            <div class="input-group">
          
                                                <select name="order_status" class="form-select">
                                                    <option value="">Select Order Status</option>
                                                    <option value="in Progress" {{Request::get('status') == 'in Progress' ? 'selected':''}}>In Progress</option>
                                                    <option value="completed" {{Request::get('status') == 'completed' ? 'selected':''}}>Completed</option>
                                                    <option value="pending" {{Request::get('status') == 'pending' ? 'selected' : ''}}>Pending</option>
                                                    <option value="cancelled" {{Request::get('status') == 'cancelled' ? 'selected' : ''}}>Cancelled</option>
                                                    <option value="out-for-delivery" {{Request::get('status') == 'out-for-delivery' ? 'selected' : ''}}>Out of delivery</option>
                                                </select>
    
                                                <button type="submit" class="btn btn-primary">Update</button>


                                          </div>
                                        
                                        </div>
                                        
                                    
                                </form>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection