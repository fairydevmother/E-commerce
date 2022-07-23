@extends('master')
@section("content")
<div class="custom-product">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
 

  <!-- Wrapper for slides -->
  <div" class="carousel-inner">
    

    @foreach ($products as $item)  
    <div class="item {{$item['id']==1?'active':''}}">
      <a href="detail/{{$item['id']}}">
        <img  class="slider-img" src="{{$item['gallery']}}" >
        <div class="carousel-caption">
            <h2> {{$item['name']}}</h2>

           </a>
           <p> {{$item['description']}}</p>
        </div>
      
     </div>
    
 @endforeach

</div>   

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


</div>

<div align="center" class="trending-wrapper">
    <h3>Trending</h3>
    @foreach($products as $item)
     <div class="trending-item">
     <a href="detail/{{$item['id']}}">
        <img class="trending-image" src="{{$item['gallery']}}" />
      <div>
         <h2> {{$item['name']}} </h2>
         <p>{{$item['description']}}</p>
         <button  class="btn btn-primary">Add to Cart</button>
          <button class="btn btn-success">Buy Now</button>
      </div>
       </a>
    </div>
    @endforeach
    
</div>
@endsection