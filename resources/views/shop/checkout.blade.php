
@extends('layouts.master')
@section('title')
Checkout
@endsection
@section('content')
    <div class="row">
         <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <h1>Checkout</h1> 
            <h4>Your Total Price: ${{$total}} </h4>
            @if(Session::has('error'))
            <div id="charge-error" class="alert alert-danger">
                {{Session::get('error')}}
            </div>
            @endif
            <form action="{{route('checkout')}}" method="post" id="checkout-form" name="myForm">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                           <label for="name">Name</label>
                           <input type="text" id="name" name="name"  class="form-control" required> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                         <div class="form-group">
                            <label for="address">  Address</label>
                            <input type="text" id="address" name="address"  class="form-control" required> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="card-name">Card Holder Name</label>
                            <input type="text" id="card-name" name="card-name" class="form-control" required> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="card-number">Credit Card Number</label>
                            <input type="text" id="card-number" name="card-number" class="form-control" required> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="card-expiry-month">Expiry Month</label>
                            <input type="text" id="card-expiry-month" name="exp_month" class="form-control">
                         </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Expiration Year</label>
                            <input type="text" id="card-expiry-year" name="exp_year" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">       
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">CVC</label> 
                            <input type="text" id="card-cvc" name="card-cvc" class="form-control" required>  
                        </div>
                    </div>
                </div>
                {{csrf_field()}}
                <button type="submit" class="btn btn-success" id="button">Buy Now</button>
            </form>  
         </div>   
    </div>
                             
@endsection

@section('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{ URL::to('js/checkout.js')}}"></script>
@endsection