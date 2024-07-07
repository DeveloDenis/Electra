@extends('extenders.layout')

@section('title','View Color')

@section('style')

<style>

.container1{
  margin-top:100px;
}
</style>

@endsection

@section('content')

@include('extenders.navbar-admin')


<div class="container1">

  @if(session()->has('success'))
                          
  <div class="alert alert-success alert-dismissible fade show mt-5">
    {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>


  @endif

<table class="table table-light table-hover my-5 ">
<thead>
<tr>
<th scope="col">Color Id</th>
<th scope="col">Color Name</th>
<th scope="col">Color code</th>
<th scope="col">Status</th>
<th scope="col">Created at</th>
<th scope="col">Actions</th>



</tr>
</thead>

<tbody>
@forelse($colors as $color)

<tr>
<td>{{$color->id}}</td>
<td>{{$color->name}}</td>
<td>{{$color->code}}</td>
<td>{{$color->created_at}}</td>
<td>{{$color->status == '1' ? 'Hidden':'Vissible'}}</td>
<td>

<a href="{{route('color.delete',$color->id)}}" onclick="return confirm('Are you sure , you want to delete this color?')" class="btn btn-danger mb-3"><i class="fa-solid fa-trash" style="color:#fff;"></i>Delete</a><br>

<a href="{{route('color.edit',$color->id)}}"><button class="btn btn-success"><i class="fa-solid fa-pen" style="color:#fff;"></i> Update Color</button></a>
</td>
</tr>

@empty

<tr>
<td colspan="6">
<p class="text-center">Colors dont exsists</p>
</td>
</tr>
@endforelse
</tbody>
</table>


</div>


@endsection