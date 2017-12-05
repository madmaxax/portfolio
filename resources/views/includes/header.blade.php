<head>

	@yield('title')

	@yield('metaTag')

	<meta charset="utf-8">
	<meta name="google-site-verification" content="google7539006ff2b10411.html" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="{{ asset('img/Mm.png') }}">
	<link rel="stylesheet" href="{{ mix('css/' . $css) }}" />
	<!-- Get google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Serif" rel="stylesheet">
	<!-- Google specific tags -->
	<meta name="author" content="Maximilian Muza" />
	<meta name="copyright" content="Maximilian Muza" />
	<meta name="application-name" content="Portfolio" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="p:domain_verify" content="82c933ec35934928940e18e09052b2c2"/>
	<meta property="og:url" content="http://maximilianmuza.de" />
	<meta property="og:type" content="homepage" />
	<meta property="og:title" content="Maximilian Muza: Internetseiten Erstellung" />
	<meta property="og:description" content="So erstellst du einen Internetauftritt mit dem Ziel neue Kunden zu gewinnen." />
	<meta property="og:image" content="http://maximilianmuza.de/img/M.png" />
</head>

