@extends('extenders.layout')

@section('title','Orders')


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


<div class="py-3 py-md-5 container1">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="shadow bg-white p-3">
                  <h4 class="mb-4">Today Orders</h4>
                  <hr>
                   

                  
                  @if(session()->has('message'))
                        
                  <div class="alert alert-secondary alert-dismissible fade show">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>


                  @endif

                  @if(session()->has('success'))
                          
                      <div class="alert alert-success alert-dismissible fade show">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>


                      @endif


                  <form action="{{route('filter')}}" method="GET"> 

                       <div class="row">
                        <div class="col-md-3">
                          <label>Filter by Date</label>

                          <input type="date" name="date" value="{{Request::get('date') ?? date('Y-m-d')}}" class="form-control">
                        </div>

                        <div class="col-md-3">
                          <label>Filter by Status</label>

                          <select name="status" class="form-select">
                                <option selected disabled> The status</option>
                                <option value="in Progress" {{Request::get('status') == 'in Progress' ? 'selected':''}}>In Progress</option>
                                <option value="completed" {{Request::get('status') == 'completed' ? 'selected':''}}>Completed</option>
                                <option value="pending" {{Request::get('status') == 'pending' ? 'selected' : ''}}>Pending</option>
                                <option value="cancelled" {{Request::get('status') == 'cancelled' ? 'selected' : ''}}>Cancelled</option>
                                <option value="out-for-delivery" {{Request::get('status') == 'out-for-delivery' ? 'selected' : ''}}>Out of delivery</option>
                          </select>
                        </div>

                        <div class="col-md-6">
                          <br/>
                          <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                       </div>

                  </form>
                  <hr>


                  

                  <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thaed>
                                    
                                 <th>Order ID</th>
                                 <th>Tracking No</th>
                                 <th>User ID</th>
                                 <th>Full Name</th>
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
                                  <td>{{$item->user_id}}</td>
                                  <td>{{$item->fullname}}</td>
                                  <td>{{$item->payment_mode}}</td>
                                  <td>{{$item->created_at->format('Y-m-d')}}</td>
                                  <td>{{$item->status_message}}</td>

                                  <td>

                                      <a href="{{route('admin.orders.show',$item->id)}}" class="btn btn-primary">View</a>

                                  </td>
                                 </tr>


                                  
                                  @empty

                                  <tr>

                                       <td colspan="7" class="text-center">No orders available today</td>

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


@endsection