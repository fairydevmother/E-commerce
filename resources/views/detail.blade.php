@extends('master')
@section("content")
<div class="container">
   <div class="row">

   <div class="col-sm-6">
  
     <img class="detail-img" src="{{$product['gallery']}}" />
    

   </div>
  <div class="container">
   <div class="row">
    <div class="col-sm-6">
      <a href="/">Go back</a>  
     <h2> {{$product['name']}} </h3>
     <h3> $ {{$product['price']}} </h3>
     <h3> {{$product['description']}} </h3>  <br>
     
     <br>
    </div>
    <div class="col-sm-6">
     <div class="container">
      <div class="row">
         <div class="col-sm-2">
         <form action="/add_to_cart" method="POST">
          @csrf
           <input type="hidden" name="product_id" value="{{$product['id']}} ">
          <button style="width:160px;height:70px; font-size:20px;" class="btn btn-primary">Add to Cart</button>
          </form>
   
         </div>
         <div class="col-sm-2">
          <button  style="width:160px;height:70px;font-size:20px;" style="" class="btn btn-success">Buy Now</button></div></div>
      </div>
     </div>
 
    </div>
    
   </div>
  </div>





   </div>

</div>


@endsection