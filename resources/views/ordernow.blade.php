@extends('master')
@section("content")
<div class="custom-product">

    
    <h3 align="center">Checkout</h3>

    <table class="table">
  <tr>
    <td>Amount</td>
    <td>{{$total}}</td>
  <tr>
  <tr>
    <td>Tax</td>
    <td>$ 0</td>
    
 </tr>
  <tr>
    <td>Delivery</td>
    <td>$ 10</td>
  </tr>
  <tr>
    <td>Total Amount</td>
    <td>{{$total+10}}</td>
  </tr>
    <table>
   <br>
   <br>

  <div align="center">
   <form action="checkout" method="POST">
    @csrf
    <div class="form-group">
    
      <textarea name="address" type="email" placeholder="enter you address" class="form-control">
     </textarea>
    </div>
    <div class="form-group">
    <label for="pwd">Payment Method</label> <br>
    <input type="radio" value="cash" name="payment" ><span>Online Payment</span>
    <input type="radio" value="cash" name="payment" ><span>EMI Payment</span>
    <input type="radio" value="cash" name="payment"><span>Payment on Delivery</span>
    </div>
 
  <button type="submit" class="btn btn-default">Order</button>
  </form>
  </div>
</div>


@endsection