@extends('master')
@section("content")
<div class="custom-product">
   <div align="center" class="trending-wrapper">
    <h3>Search Results</h3>
    @foreach($products as $item)
     <div class="trending-item">
     <a href="detail/{{$item['id']}}">
        <img class="trending-image" src="{{$item['gallery']}}" />
      <div>
         <h3> {{$item['name']}} </h3>
         <p>{{$item['description']}}</p>
      </div>
       </a>
    </div>
    @endforeach
  </div>

</div>


@endsection