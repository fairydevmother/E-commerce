@extends('master')
@section("content")
<div class="container">
   <div class="row">

   <div class="col-sm-6">
  
     <img class="slider-img" src="{{$product['gallery']}}" />
    

   </div>

   <div class="col-sm-6">
     <a href="/">Go back</a>  
     <h2> {{$product['name']}} </h3>
     <h3> $ {{$product['price']}} </h3>
     <h3> {{$product['description']}} </h3>  <br><br>
     <button class="btn btn-primary">Add to CART</button>

     
     <br><br>

     <button class="btn btn-success">Buy Now</button>
   </div>



   </div>

</div>


@endsection