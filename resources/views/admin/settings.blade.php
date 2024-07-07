@extends('extenders.layout')


@section('title','Settings')

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


<div class="row container1 mb-3">
    <div class="col-md-12 grid-margin">

        @if(session()->has('success'))
                          
        <div class="alert alert-success alert-dismissible fade show">
          {{session('success')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>


        @endif
        <form action="{{route('set.settings')}}" method="post">
            @csrf

            <div class="card-mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Website</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Website Name</label>
                            <input type="text" value="{{$setting->website_name ?? ''}}" name="website_name" class="form-control"/>
                        </div>

                        <div class="col-md-6 mb-3">
                            <laravel>Website URL</laravel>
                            <input type="text" value="{{$setting->website_url ?? ''}}" name="website_url" class="form-control" />
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Page Title</label>
                            <input type="text" value="{{$setting->page_title ?? ''}}" name="title" class="form-control"/>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Meta Keywords</label>
                             <textarea name="meta_keywords"value="" class="form-control" rows="3">{{$setting->meta_keyword ?? ''}}</textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Meta Description</label>
                            <textarea name="meta_description"  class="form-control" rows="3">{{$setting->meta_description ?? ''}}</textarea>
                        </div>


                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Website -Information</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                                <label>Address</label>
                                <textarea name="address"  class="form-control" rows="3">{{$setting->address ?? ''}}</textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Phone 1 #</label>
                            <input type="text" value="{{$setting->phone1 ?? ''}}" name="phone1" lass="form-control" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Phone 2 #</label>
                            <input type="text" value="{{$setting->phone2 ?? ''}}" name="phone2" lass="form-control" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Email Id 1 *</label>
                            <input type="text" value="{{$setting->email1 ?? ''}}" name="email1" lass="form-control" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Email Id 2 </label>
                            <input type="text" value="{{$setting->email2 ?? ''}}" name="email2" lass="form-control" />
                        </div>


                    </div>
                </div>
            </div>


            <div class="card-mb-3">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Facebook (optional)</label> 
                        <input type="text" value="{{$setting->facebook ?? ''}}" name="facebook" class="form-control"/>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Twitter (optional)</label> 
                        <input type="text" value="{{$setting->twitter ?? ''}}" name="twitter" class="form-control"/>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Instagram (optional)</label> 
                        <input type="text" value="{{$setting->instagram ?? ''}}" name="instagram" class="form-control"/>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Google + (optional)</label> 
                        <input type="text" value="{{$setting->google ?? ''}}" name="google" class="form-control"/>
                    </div>
                </div>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary text-white">Save Setting</button>
            </div>
            
        </form>
    </div>
</div>

@include('extenders.footer')
@endsection