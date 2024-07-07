@extends('extenders.layout')

@section('title','Category')

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
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-header">
                <h3>View Categories
                    <a href="{{route('admin.category.create')}}" class="btn btn-primary btn-sm float-end">Add Category</a>
                </h3>
            </div>

            <div class="card-body">
                   
                @if(session()->has('success'))
                          
                      <div class="alert alert-success alert-dismissible fade show">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>


                      @endif 


                      @if(count($categories))

                      <table class="table table-bordered tabel-striped">
                               <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                  </tr>
                               </thead>

                               <tbody>

                                @foreach($categories as $category)
                                     <tr>
                                       <td>{{$category->id}}</td>
                                       <td>{{$category->name}}</td>
                                       <td>{{$category->status == '1' ? 'Hidden':'Visible'}}</td>
                                       <td>
                                           <a href="{{route('category.edit', $category->id)}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                                           <form action="{{route('delete.category', $category->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                             <button type="submit"  class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</button>
                                           </form>
                                          
                                       </td>
                                   </tr>

                                @endforeach
                                   
                               </tbody>
                      </table>
                        {{$categories->links()}}


                        @else

                        <div class="my-5 text-center">
                            <p> Categories don't exists</p>
                        </div>

                        @endif
            </div>
        </div>
    </div>
</div>



</div>



@endsection