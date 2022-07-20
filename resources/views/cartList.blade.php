@extends('master')
@section("content")
<div class="custom-product">

    <div align="center" class="trending-wrapper">
    <h3 align="center">Cart</h3>
    <a class="btn btn-success" href="ordernow">Order Now</a>
    @foreach($products as $item)
     <div class="searched-item">
      <div class="col-sm-3">
      <a href="detail/{{$item->id}}">
        <img class="trending-image" src="{{$item->gallery}}" />
      <div>
         <h3> {{$item->name}} </h3>
         <p>{{$item->description}}</p>
      </div>
       </a>
       <a href="removeCart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
      </div>
    </div>
    @endforeach
  </div>

</div>


@endsection