@extends('layouts.master')
@section('title')
Profile
@endsection
@section('content')
<div class="container">
      <center>  	<h2>My Orders</h2></center>
    
    <div class="row">
    	@foreach($orders as $order)
        <div class="col-md-8 col-md-offset-2">
        	    <div class="panel-heading">
                	<ul class="list-group">
                		<li class="list-group-item">{{$order}}</li>
                		<li class="list-group-item order-footer"><b>Total Price :</b></li>
                	</ul>

                </div>
             @endforeach

                
            </div>
        </div>
    </div>


</div>
@endsection