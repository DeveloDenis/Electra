@extends('extenders.layout')

@section('title','Checkout')


@section('style')

<style>

.checkout{
    margin-top:100px;
}

.checkout .form-control{
    border-radius: 0px !important;
}
.checkout .form-control:focus{
    border: 1px solid #000 !important;
    box-shadow: none !important;
}
.checkout .nav-link{
    border: 1px solid #000;
    border-radius: 0px;
    margin-bottom: 8px;
}
.checkout .tab-content{
    padding-right: 10px;
}

</style>

@endsection


@section('content')
@include('extenders.navbar')

  



<livewire:user.checkout  />


@include('extenders.footer')
@endsection