@extends('extenders.layout')


@section('title','Barnds')


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

<!--Normal create Brand -->
<div class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Brands</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('brands.create')}}" method="post">
           @csrf
        
        <div class="modal-body">

               <div class="mb-3">
                <label >Select Category</label>
                   <select name="category_id" required class="form-control">
                      <option value="" selected disabled>--Select Category--</option>
                         @forelse($categories as $category)

                      <option value="{{$category->id}}" name="category_id">{{$category->name}}</option>
                         
                      @empty

                      endif
                      @endforelse

                   </select>
                   @error('category_id')<small class="text-danger">{{$message}}</small>@enderror
               </div>

          <div class="mb-3">
            <label>Brand Name</label>
            <input type="text" name="name" class="form-controll">
            @error('name')
               <div class="text-danger">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label>Brand Slug</label>
            <input type="text" name="slug" class="form-controll">
            @error('slug')
               <div class="text-danger">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label>Status</label><br>
            <input type="checkbox" />Checked=hidden, Un-Checked= Visible
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
</form>

      </div>
    </div>
  </div>

  <!--End-->

  <div class="container1">

    <div class="row my-5">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h4>Brands List
                      <a href="#" data-bs-toggle="modal" data-bs-target="#addBrandModal" class="btn btn-primary btn-sm float-end">Add Barands</a>
                  </h4>
              </div>
  
  
  
              <div class="card-body">
  
                  @if(session()->has('success'))
                            
                  <div class="alert alert-success alert-dismissible fade show">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
  
  
                  @endif 
  
                  
                    <div class="col-md-12">
  
  
                      @if(count($brands))
  
                  <table class="table table-bordered table-stiped">
                      <thead>
  
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Category</th>
                              <th>Slug</th>
                              <th>Status</th>
                              <th>Action</th>
                          </tr>   
  
                      </thead>
  
                      <tbody>
                          @foreach($brands as $brand)
                          <tr>
                            <td>{{$brand->id}}</td>
                            <td>{{$brand->name}}</td>
                            <td>
                              @if($brand->category)
                              {{$brand->category->name}}
                              @else
  
                              No Category
                              @endif
                            </td>
                            <td>{{$brand->slug}}</td>
                            <td>{{$brand->status == '1' ? 'Hidden':'Active'}}</td>
                            <td>
                               
                              <a href="{{route('brands.edit',$brand->id)}}"  class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
  
  
                              <form action="{{route('brands.delete', $brand->id)}}" method="post">
                                  @csrf
                                  @method('delete')
                                  
                                   <button type="submit"  class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</button>
                                 </form>
                            </td>
                          </tr>    
                         @endforeach
                      </tbody>
                  </table>
                  {{$brands->links()}}
  
                  @else
  
                  <div class="my-5 text-center">
                      <p> Brands don't exists</p>
                  </div>
  
                  @endif
  
  
  
                    </div>
                  
                  
              </div>
          </div>
      </div>
  </div>
  

  </div>


@endsection