
@extends('layouts.master')
@section('title')
Laravel Shopping Cart
@endsection
@section('content')
<div class="row">
	<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
		@if(Session::has('success'))
		<div id="charge-message" class="alert alert-success">
			{{ Session::get('success')}}
		</div>
	</div>
	@endif
</div>

@foreach($products->chunk(3) as $productChunk)
<div class="row">
	@foreach($productChunk as  $product)

	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
			<img src="{{$product->imagePath}}" class="image-responsive">
			<div class="caption">
				<h3>{{$product->title}}</h3>
				<p class="text-muted">
					{{$product->description}} 
				</p>
				<div class="clearfix">
					<div class="price pull-left">
						${{$product->price}}
					</div>
						<a href="{{route('product.addToCart', ['id'=> $product->id])}}" class="btn btn-success pull-right"  role="button">Add to cart</a>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>

@endforeach
@endsection