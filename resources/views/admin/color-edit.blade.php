
@extends('extenders.layout')

@section('title','Create Color')


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
        @if(session()->has('success'))
                          
                      <div class="alert alert-success alert-dismissible fade show">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>


                      @endif

                      <div class="card">
                        <div class="card-header">
                               <h3>Update Color
                                   <a href="{{route('view.color')}}" class="btn btn-primary btn-sm text-white float-end">
                                Back</a>
                            </h3>
                        </div>

                        <div class="card-body">
                              <form action="{{route('update.color',$color->id)}}" method="POST"> 
                                  @csrf
                                  @method('put')
                                <div class="mb-3">
                                    <label>New Color Name</label>
                                    <input type="text" name="name" class="form-control" value="{{$color->name}}">

                                    @error('name')
                                       <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label>New Color Code</label>
                                    <input type="text" name="code" class="form-control" value="{{$color->code}}">
                                    @error('code')
                                       <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label>Status</label><br>
                                    <input type="checkbox" name="status" {{$color->status == '1' ? 'checked':''}}  />Checked=Hidden, UnChecked=Vissible
                                    
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                              </form>
                        </div>
                      </div>
    </div>
</div>


</div>


@endsection