@extends('extenders.layout')

@section('title','View Products')


@section('style')
<style>
.search{
    margin-top: 90px;
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
                        <h4>Users
                          <a href="{{route('user.create')}}"  class="btn btn-primary btn-sm float-end">Add User</a>
                        </h4>
          
                        
          
                    </div>
          
          
                    <div class="col-md-12">
          
                      <form action="{{route('users.informations')}}" method="GET" class="d-flex search" role="search">
                        <input class="form-control me-2" type="text" name="search2" placeholder="Search By User ID" aria-label="Search" autocomplete="off">
                    
                        <select name="type">
                          <option selected disabled>Chose the type of  user</option>
                            <option value="0">User</option>
                            <option value="1">Admin</option>
                        </select>
                    <button class="btn btn-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                      </form>
          
                    </div>
                    
          
          
          
                    <div class="card-body">
          
                        @if(session()->has('success'))
                                  
                        <div class="alert alert-success alert-dismissible fade show">
                          {{session('success')}}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
          
          
                        @endif 
          
          
                        @if(count($users))
          
                        <table class="table table-bordered table-stiped">
                            <thead>
          
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>   
          
                            </thead>
          
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                  <td>{{$user->id}}</td>
                                  <td>{{$user->name}}</td>
                                  
                                  <td>{{$user->email}}</td>
                                  <td>
                                    @if($user->is_admin == '0')
                                         
          
                                        <label class="btn  btn-primary">user</label>
          
                                        @elseif($user->is_admin == '1')
          
                                        <label class="btn btn-success">Admin</label>
          
                                         @else
          
                                        
          
                                         <label class="badge btn-danger">none</label>
          
                                         
          
                                    @endif
                                  </td>
                                  <td>
                                     
                                    <a href="{{route('user.edit.admin',$user->id)}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square" style="color:#ffffff;"></i>Edit</a>
          
          
                                    <a href="{{route('user.delete1',$user->id)}}" onclick="return confirm('Are you sure you want to delet this account?')" class="btn btn-danger"><i class="fa-solid fa-trash" style="color:#ffffff;"></i>Delete</a>
          
                                  </td>
                                </tr>    
                               @endforeach
                            </tbody>
                        </table>
                        {{$users->links()}}
          
                        @else
          
                        <div class="my-5 text-center">
                            <p> Users don't exists</p>
                        </div>
          
                        @endif
                    </div>
                </div>
            </div>
          </div>
        
        
        </div>  
    


   
    
        
  
     
    





@endsection
