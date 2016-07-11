<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>@yield('title', 'Sample Web Application')</title>
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="favicon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" href="favicon.png">

        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
	</head>
	<body>
		@include('common.nav')
		<div class="container">@yield('body')</div>
		@include('common.footer')
		<script src="{{ URL::asset('js/main.js') }}"></script>
	</body>
</html>
