@extends('layouts.master')
@section('title')
Sign up
@endsection
@section('content')

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h1>Signup</h1>
		@if(count($errors)>0)
			@foreach($errors->all() as $error)
			<div class="alert alert-danger">
				<p>{{$error}}</p>
			</div>
			@endforeach
		@endif
		<form action="{{route('user.signup')}}" method="post">
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" id="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">Password</label>
				<input type="password" id="password" name="password" class="form-control">
			</div>
			<button type="submit" class="btn btn-lg btn-primary">Signup</button>
			{{csrf_field()}}
		</form>
	</div>
</div>
@endsection