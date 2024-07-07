@extends('extenders.layout')

@section('title','Change password')


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

<div class="py-5">
    <div class="container container1">
        <div class="row justify-content-center row1">
            <div class="col-md-6">
                @if(session('message'))
                    <h5 class="alert alert-success mb-2">
                        {{session('message')}}
                    </h5>
                @endif

                @if($errors->any())
 
                <ul>
                    @foreach($errors->all() as $error)
                       <li class="text-danger">{{$error}}</li>
                    @endforeach
                </ul>

                @endif

                <div class="card shadow">
       
                    <div class="card-header bg-primary">
                        
                        <h4 class="mb-0 text-white">Change Password</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route('changePass')}}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label>Current Password</label>

                                <input type="password" name="current_password" class="form-control" > 
                            </div>


                            <div class="mb-3">
                                <label>New Password</label>
                                <input type="password"  name="password" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label>Confirm Password</label>

                                <input type="password" name="password_confirmation" class="form-control" />
                            </div>

                            <div class="mb-3 text-end">
                                <hr>

                                <button type="submit" class="btn btn-primary">Update Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('extenders.footer')
@endsection