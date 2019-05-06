@extends('layouts.master')
@section('title')
Sign in
@endsection
@section('content')

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h1>Sign in</h1>
		@if(count($errors)>0)
			@foreach($errors->all() as $error)
			<div class="alert alert-danger">
				<p>{{$error}}</p>
			</div>
			@endforeach
		@endif
		<form action="{{route('user.signin')}}" method="post">
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" id="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">Password</label>
				<input type="password" id="password" name="password" class="form-control">
			</div>
			<button type="submit" class="btn btn-lg btn-primary">Sign in</button>
			{{csrf_field()}}
		</form>
		<p>Don't have an account? <a href="{{route('user.signup')}}">Sign up instead!</a></p>
	</div>
</div>
@endsection