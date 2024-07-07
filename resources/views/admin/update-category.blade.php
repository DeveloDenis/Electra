@extends('extenders.layout')

@section('title','Update Category')

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
                <h3>Update Category
                    <a href="{{route('admin.category')}}" class="btn btn-primary btn-sm float-end">Back</a>
                </h3>
            </div>

            <div class="card-body">
                   <form action="{{route('update.category', $category->id)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('put')
                      <div class="row">

                         <div class="col-md-6 mb-3">
                        <label>New Name Category</label>
                        <input type="text" name="name" class="form-control" value="{{$category->name}}" />

                        @error('name')
                              <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>



                      <div class="col-md-6 mb-3">
                        <label>New Slug</label>
                        <input type="text" name="slug" class="form-control" value="{{$category->slug}}" />
                        @error('slug')
                              <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div> 


                      <div class="col-md-6 mb-3">
                        <label>New Description</label>
                        <textarea type="text" name="description" class="form-control"  rows="3">{{$category->description}}</textarea>
                        @error('description')
                              <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>


                      <div class="col-md-6 mb-3">
                        <label>New Image</label>
                        <input type="file" name="image"  class="form-control" />
                        
                        @error('image')
                              <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>

                      <div class="col-md-6 mb-3">
                        <label>New Status</label><br>
                        <input type="checkbox" name="status" {{$category->status == '1' ? 'checked':''}}  />
                        @error('status')
                              <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>

                      <div class="col-md-12">
                        <h4>SEO Tags</h4>
                      </div>

                      <div class="col-md-12 mb-3">
                        <label>New Meta title</label>
                        <input type="text" name="meta_title" class="form-control" value="{{$category->meta_title}}" />
                        @error('meta_title')
                              <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>

                      <div class="col-md-12 mb-3">
                        <label>New Meta keyword</label>
                        <textarea type="text" name="meta_keyword" class="form-control" rows="3" >{{$category->meta_keyword}}</textarea>
                        @error('meta_keyword')
                              <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>

                      <div class="col-md-12 mb-3">
                        <label>New Meta Description</label>
                        <textarea type="text" name="meta_description" class="form-control" rows="3" >{{$category->meta_description}}</textarea>
                        @error('meta_description')
                              <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>
 

                      <div class="col-md-12 mb-3">
                             <button type="submit" class="btn btn-success float-end">Modifi</button>
                      </div>

                      </div>
                      

                   </form>
            </div>
        </div>
    </div>
</div>

</div>




@endsection