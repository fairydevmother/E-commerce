@extends('master')
@section("content")
<div class="custom-product">

    <div align="center" class="trending-wrapper">
    <h3 align="center">Your Orders</h3>
    
    @foreach($orders as $item)
     <div class="searched-item">
      <div class="col-sm-3">
      <a href="detail/{{$item->id}}">
        <img class="trending-image" src="{{$item->gallery}}" />
      <div>
         <h3> {{$item->name}} </h3>
         <h4>{{$item->status}} </h4>
      </div>
      
    </div>
    @endforeach
  </div>

</div>


@endsection