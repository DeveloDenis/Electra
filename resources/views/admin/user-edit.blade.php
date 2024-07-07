@extends('extenders.layout')

@section('title','User Edit')


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
                    <h4>Update User
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
    
    
                    <form action="{{route('user.update1',$user->id)}}" method="POST">
    
                     @csrf
                     @method('PUT')
    
                      
                      <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Update Name</label>
                            <input type="text" value="{{$user->name}}" name="name" class="form-control"/>
    
                            @error('name')
                               <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
    
                       
    
                        <div class="col-md-6 mb-3">
                            <label>Update Password</label>
                            <input type="password" value="{{$user->password}}" name="password" class="form-control"/>
    
                            @error('password')
                               <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
    
                        <div class="col-md-6 mb-3">
                            <label>Update Role</label>
                            <select name="role_as" class="form-control">
    
                              
                              <option value="0" {{$user->is_admin == '0' ? 'selected':''}}>User</option>
                              <option value="1" {{$user->is_admin == '1' ? 'selected':''}}>Admin</option>
    
                            </select>
    
                            @error('role_as')
                               <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
    
                        <div class="col-md-12 text-end">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
    
                      </div>
    
                    </form>
                </div>
    
    
            </div>
        </div>
    </div>
    


</div>




@endsection