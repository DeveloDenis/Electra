@extends('extenders.layout')


@section('title','Thanks for your purchase')

@section('style')

<style>

.pyt--md-4{
    margin-top:100px;
}
</style>

@endsection

@section('content')

@include('extenders.navbar')

<div class="py-3 pyt--md-4 ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Thank You for your purchase!</h2>
                <h4>Your Order was sent successfully!</h4>
                <a href="{{route('user.shop')}}" class="btn btn-primary">Continue Shopping</a>
            </div>
        </div>
    </div>
</div>


@endsection