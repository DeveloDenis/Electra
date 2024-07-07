@extends('extenders.layout')

@section('title', 'Account Information')

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
        margin-top:150px;
        
    }

   

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button{
        -webkit-appearance: none;
        margin: 0;
    }


    .background{
        background-color:#050505;
    }

    

</style>
@endsection


@section('content')

@include('extenders.navbar')

<div class="container container1  mb-5" id="product-cards">
   

    <div class="row my-3 " style="margin-top: 30px;">

      


      @if(session()->has('success'))
                          
      <div class="alert alert-success alert-dismissible fade show">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>


      @endif

      <!--Users Information-->

      <div class="row d-flex justify-content-center ">
        <div class="col-md-10 mt-5 pt-5 ">
            <div class="row z-depth-3 ">
                <div class="col-sm-4 bg-info rounded-left  ">
                    <div class="card-block text-center text-white">
                        <i class="fas fa-user-tie fa-7x mt-5"></i>
                        <h2 class="font-weight-bold mt-4">{{Auth::user()->name}}</h2>
                        <p>Your profile</p>
                        <i class="far fa-edit-tie fa-2x mb-4"></i>
                    </div>
                </div>
                <div class="col-sm-8 bg-white rounded-right backgrond">
                    <h3 class="mt-3 text-center ">Information Account</h3>
                   
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="font-weight-bold">Name:</p>
                            <h6 class="text-muted">{{Auth::user()->name}}</h6>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <p class="font-weight-bold">Email:</p>
                            <h6 class="text-muted">{{Auth::user()->email}}</h6>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <p class="font-weight-bold">Password:</p>
                            <h6 class="text-muted">##########</h6>
                        </div>
                    </div>


                    <h4 class="mt-3">Actions:</h4>
                    <hr class="bg-primary">

                    <div class="row my-3">
                        <div class="col-sm-6">
                            <form action="{{route('logout')}}" method="POST">
                                @csrf

                                <button type="submit" class="btn btn-danger">Logout</button>
                            </form>
                            
                        </div>
                    </div>

                    
                     <div class="row my-3">
                        <div class="col-sm-6">
                            <a href="{{route('view.changePassword')}}" class="btn btn-success">Chenge Password</a>
                        </div>
                        
                     </div>
                    


                </div>
            </div>
        </div>
    </div>

    <!--User Update-->

    <div class="row row1 mt-3 d-flex justify-content-center">

        
        <div class="col-md-10">
        <div class="card shadow">
            <div class="card-header bg-primary">
                <h4 class="mb-0 text-white">Update Profile Details</h4>
            </div>
            <div class="card-body">
                <form action="{{route('update.profile',Auth::user()->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Username</label>
                                <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control"/> 

                                @error('name')

                                   <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                       

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label>Add Phone Number</label>
                            <input type="number" name="phone" value="{{Auth::user()->phone}}" class="form-control phone" autocomplete="off"/>
                            
                            @error('phone')

                            <div class="text-danger">{{$message}}</div>
                         @enderror
                        </div>
                    </div>

                    


                    <div class="col-md-6">
                        <div class="mb-3">
                            
                            <button type="submit"   class="btn btn-primary" >Update data</button> 
                        </div>
                    </div>
                </form>
            </div>
        </div>




      </div>


    </div>


      </div>

      <!--End-->

</div>

      <!--End-->


      

</div>

@include('extenders.footer')
@endsection
