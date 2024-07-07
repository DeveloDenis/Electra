@extends('extenders.layout')

@section('title','Create User')

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
                    <h4>Create User
                        <a href="{{route('users.informations')}}"  class="btn btn-primary btn-sm float-end">Back</a>
                    </h4>
                </div>
    
                <div class="card-body">
    
    
                    @if(session()->has('success'))
                              
                    <div class="alert alert-success alert-dismissible fade show">
                      {{session('success')}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
    
    
                    @endif
    
    
                    <form action="{{route('user.add')}}" method="POST">
    
                     @csrf
                      
                      <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control"/>
    
                            @error('name')
                               <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
    
                        <div class="col-md-6 mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control"/>
    
                            @error('email')
                               <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
    
                        <div class="col-md-6 mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control"/>
    
                            @error('password')
                               <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
    
                        <div class="col-md-6 mb-3">
                            <label>Select Role</label>
                            <select name="role_as" class="form-control">
    
                              <option value="">Select Role</option>
                              <option value="0">User</option>
                              <option value="1">Admin</option>
    
                            </select>
    
                            @error('role_as')
                               <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
    
                        <div class="col-md-12 text-end">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
    
                      </div>
    
                    </form>
                </div>
    
    
            </div>
        </div>
    </div>



</div>


@endsection