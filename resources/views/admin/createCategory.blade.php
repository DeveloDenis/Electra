@extends('extenders.layout')

@section('title','Create Categories')


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
                <h3>Create Category
                    <a href="{{route('admin.category')}}" class="btn btn-primary btn-sm float-end">Back</a>
                </h3>
            </div>

            <div class="card-body">
                   <form action="{{route('admin.make.category')}}" method="post" enctype="multipart/form-data">
                      @csrf

                      <div class="row">

                         <div class="col-md-6 mb-3">
                        <label> Name Category</label>
                        <input type="text" name="name" class="form-control" />

                        @error('name')
                              <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>



                      <div class="col-md-6 mb-3">
                        <label>Slug</label>
                        <input type="text" name="slug" class="form-control" />
                        @error('slug')
                              <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div> 


                      <div class="col-md-6 mb-3">
                        <label>Description</label>
                        <textarea type="text" name="description" class="form-control" rows="3"></textarea>
                        @error('description')
                              <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>


                      <div class="col-md-6 mb-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" />
                        @error('image')
                              <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>

                      <div class="col-md-6 mb-3">
                        <label>Status</label><br>
                        <input type="checkbox" name="status"  />
                        @error('status')
                              <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>

                      <div class="col-md-12">
                        <h4>SEO Tags</h4>
                      </div>

                      <div class="col-md-12 mb-3">
                        <label>Meta title</label>
                        <input type="text" name="meta_title" class="form-control" />
                        @error('meta_title')
                              <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>

                      <div class="col-md-12 mb-3">
                        <label>Meta keyword</label>
                        <textarea type="text" name="meta_keyword" class="form-control" rows="3"></textarea>
                        @error('meta_keyword')
                              <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>

                      <div class="col-md-12 mb-3">
                        <label>Meta Description</label>
                        <textarea type="text" name="meta_description" class="form-control" rows="3"></textarea>
                        @error('meta_description')
                              <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>
 

                      <div class="col-md-12 mb-3">
                             <button type="submit" class="btn btn-primary float-end">Save</button>
                      </div>

                      </div>
                      

                   </form>
            </div>
        </div>
    </div>
</div>


</div>



@endsection