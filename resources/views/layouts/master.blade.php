<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	
	<link rel="stylesheet" type="text/css" href="{{ URL:: to('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ URL:: to('font-awesome-5/css/fontawesome-all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ URL:: to('font-awesome-4.7/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ URL:: to('src/app.css')}}">
	
	@yield('styles')
</head>
<body>
@include('partials.header')
<div class="container">
	@yield('content')
</div>


<script src="{{ URL:: to('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{ URL:: to('js/bootstrap.min.js')}}"> </script>


@yield('scripts')
</body>
</html>