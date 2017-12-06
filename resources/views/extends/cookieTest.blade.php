@extends('front-small')

@section('title')

	<title>Maximilian Muza | Internetseiten erstellen</title>

@stop

@section('metaTag')

	<meta name="description" content="Fragst du dich wie du deine Website besser nutzen kannst? Wie du mit ihr mehr Erfolg haben kannst? Dann zögere nicht mich zu kontaktieren!">
    <meta name="keywords" content="Fragen, Kontakt, Wie gewinne, Internetseiten, Website erstellen, Homepage erstellen" />

@stop

@section('setHeader')

	@php 

		$NavWhite = true

	@endphp

@stop

@section('content')
	
	<div class="contactForm__wrapper">
		<h1 class="textCenter">Cookie Test</h1>
		@if(isset($cookie))
		<p>{{ $cookie }}</p>
		@endif
	</div>

@stop