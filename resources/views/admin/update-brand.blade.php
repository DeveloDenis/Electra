@extends('extenders.layout')

@section('title','Update Brand')


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
                <h3>Update Brand
                    <a href="{{route('admin.brands')}}" class="btn btn-primary btn-sm float-end">Back</a>
                </h3>
            </div>

            <div class="card-body">
                   <form action="{{route('brands.update',$brand->id)}}" method="post" >
                      @csrf
                      @method('put')
                      
                      <div class="modal-body">

                        <div class="mb-3">
                          <label >Select Category</label>
                             <select name="category_id" required class="form-control">
                                
                                   @forelse($categories as $category)
          
                                <option value="{{$category->id}}" name="category_id" {{$category->id == $brand->category_id ? 'selected':''}}>{{$category->name}}</option>
                                   
                                @empty
          
                                
                                @endforelse
          
                             </select>
                             @error('category_id')<small class="text-danger">{{$message}}</small>@enderror
                         </div>


                        <div class="mb-3">
                          <label>New Brand Name</label>
                          <input type="text" name="name" class="form-controll" value="{{$brand->name}}">
                          @error('name')
                             <div class="text-danger">{{$message}}</div>
                          @enderror
                        </div>
              
                        <div class="mb-3">
                          <label>New Brand Slug</label>
                          <input type="text" name="slug" class="form-controll" value="{{$brand->slug}}">
                          @error('slug')
                             <div class="text-danger">{{$message}}</div>
                          @enderror
                        </div>
              
                        <div class="mb-3">
                          <label>Status</label><br>
                          <input type="checkbox" />Checked=hidden, Un-Checked= Visible
                        </div>
              
                      </div>
                      
                        <button type="submit" class="btn btn-primary">Save</button>
                      

                   </form>
            </div>
        </div>
    </div>
</div>




</div>



@endsection