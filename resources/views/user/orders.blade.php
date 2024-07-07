@extends('extenders.layout')

@section('title','View Orders')


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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shadow bg-white p-3">
                    <h4 class="mb-4">My Orders</h4>
                    <hr>
                     

                    
                    @if(session()->has('message'))
                          
                    <div class="alert alert-secondary alert-dismissible fade show">
                      {{session('success')}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>


                    @endif

                    

                    <div class="table-responsive">
                          <table class="table table-bordered table-striped">
                              <thaed>
                                      
                                   <th>Order ID</th>
                                   <th>Tracking No</th>
                                   <th>Username</th>
                                   <th>Payment Mode</th>
                                   <th>Ordered Date</th>
                                   <th>Status Message</th>
                                   <th>Action</th>

                              </thaed>

                              <tbody>

                                  @forelse($orders as $item)

                                   <tr>

                                    <td>{{$item->id}}</td>
                                    <td>{{$item->tracking_no}}</td>
                                    <td>{{$item->fullname}}</td>
                                    <td>{{$item->payment_mode}}</td>
                                    <td>{{$item->created_at->format('d-m-Y')}}</td>
                                    <td>{{$item->status_message}}</td>

                                    <td>

                                        <a href="{{route('orders.show',$item->id)}}" class="btn btn-primary">View</a>

                                    </td>
                                   </tr>


                                    
                                    @empty

                                    <tr>

                                         <td colspan="7">No orders available</td>

                                    </tr>
                                 
                                  @endforelse
                             
                                  

                              </tbody>
                          </table>

                          <div>

                              {{$orders->links()}}

                          </div>
                          
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@include('extenders.footer')
@endsection