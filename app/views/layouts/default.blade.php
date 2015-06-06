<!doctype html>

<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forecastr</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/weather-icons.min.css') }}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	{{ HTML::script('javascript/chartjs/Chart.min.js')}}
	{{ HTML::script('javascript/themescripts.js')}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

</head>
<body>

	@include('layouts.navigation')

	@yield('content')

	@include('layouts.scripts')

	@include('layouts.footer')

</body>
</html>
