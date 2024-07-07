@extends('extenders.layout')

@section('title', 'Account Information')

@section('style')

@endsection


@section('content')

@include('extenders.navbar')


<div class="container my-3 ">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 mt-5 pt-5">
            <div class="row z-depth-3">
                <div class="col-sm-4 bg-info rounded-left">
                    <div class="card-block text-center text-white">
                        <i class="fas fa-user-tie fa-7x mt-5"></i>
                        <h2 class="font-weight-bold mt-4">Example</h2>
                        <p>Your profile</p>
                        <i class="far fa-edit-tie fa-2x mb-4"></i>
                    </div>
                </div>
                <div class="col-sm-8 bg-light rounded-right ">
                    <h3 class="mt-3 text-center ">Information Account</h3>
                   
                    <div class="row">
                        <div class="col-sm-6">
                            <form action="{{route('update.profile', $user->id)}}" method="post">
                                @csrf
                                @method('put')
                            <label for="name">Update your Name:</label>
                            <input type="text" name="name" value="{{$user->name}}" autocomplete="off" required>

                            @error('name')
                                
                            <div class="text-danger">
                                {{$message}}
                            </div>

                            @enderror
                               
                            <button type="submit" class="btn btn-success">Update </button>
                            </form>
                        </div>
                    </div>


                    


                    


                    </div>


                    

                    


                </div>
            </div>
        </div>
    </div>
</div>

@include('extenders.footer')
@endsection
