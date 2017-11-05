<head>

	@yield('title')

	@yield('metaTag')

	<meta charset="utf-8" />
	<meta name="google-site-verification" content="google7539006ff2b10411.html" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="{{ asset('img/Mm.png') }}">
	<link rel="stylesheet" href="{{ mix('css/app.css') }}" />
	<!-- Get google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Serif" rel="stylesheet">
	<!-- Google specific tags -->
	<meta name="author" content="Maximilian Muza" />
	<meta name="copyright" content="Maximilian Muza" />
	<meta name="application-name" content="Portfolio" />
	<meta name="thumbnail" content="" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>

