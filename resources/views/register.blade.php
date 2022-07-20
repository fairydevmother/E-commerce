
@extends('master')
@section("content")
 <div class="container custom-login">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">

        <form action="/register" method="POST">
        <div class="form-group">
            @csrf
          <label for="name">Name</label>
          <input type="text" name="name" placeholder="enter your name" class="form-control"  >
          </div>
        <div class="form-group">
            @csrf
          <label for="email">Email address</label>
          <input type="email" name="email" placeholder="enter your e-mail" class="form-control"  >
          </div>
           <div class="form-group">
         <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="enter your password">
         </div>
 
          <button type="submit" class="btn btn-success">Register</button>
       
        </form>
    </div>


    </div>
 </div>
@endsection