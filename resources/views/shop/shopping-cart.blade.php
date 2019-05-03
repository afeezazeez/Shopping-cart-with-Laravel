
@extends('layouts.master')
@section('title')
Shopping Cart
@endsection
@section('content')
    <h3>Shopping Cart <i class="fa fa-shopping-cart text-center"></i></h3>
    @if(Session::has('cart'))
    <div class="table-responsive m-b-40">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
             @foreach($products as $product)
                <tr>
                    <td><b>{{$product['item']['title']}}</b></td>
                    <td><b>{{$product['qty']}}</b></td>
                    <td><b>{{ $product['price']}}</b></td>
                    <td>
                        <button type="button" class="btn btn-danger btn-xs " ><i class="fa fa-remove"> by 1</i></button>
                        <button type="button" class="btn btn-danger btn-xs " ><i class="fa fa-remove"> All</i></button>                            
                    </td>
                   </tr>
            @endforeach 
               
            </tbody>
            </table>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <strong class="total">Total Price: {{$totalPrice}}</strong> 
        </div>   
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <a href="{{route('checkout')}}"  class="btn btn-success" style="float:right">Checkout</a> 
        </div>   
    </div>
              
  
    @else
    <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
               <h2>No items in Cart!<h2>
            </div>   
        </div>
        
    @endif
                 
@endsection