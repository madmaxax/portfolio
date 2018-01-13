@extends('front-small')

@section('title')

	<title>{{ __('small.contactHeadline') }} | Maximilian Muza</title>

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
		<div class="textCenter">
			<h1>{{ __('small.contactHeadline') }}</h1>
			<p>Name: Maximilian Muza</p>
			<p>E-Mail: muza.maximilian@gmail.com</p>
			<p>{{ __('small.telephone') }}-Nr.: +49 1578 2813332</p>
		</div>
		<br>
		<div class="contactForm flex boxShadow roundBox">
			<h2 class="width--40">{{ __('small.text') }}</h2>
			<form action="{{ route('sendmail') }}" method="post">
				<div class="contactForm__group">
					<input class="width--300" type="text" name="name" placeholder="Name" required>
				</div>
				<div class="contactForm__group">
					<input class="width--300" type="email" name="mail" placeholder="E-Mail" required>
				</div>
				<div class="contactForm__group">
					<input class="width--300" type="text" name="nachricht" placeholder="{{ __('small.msg') }}" required>
				</div>
				<button type="submit">{{ __('small.action') }}</button>
				{{ csrf_field() }}
			</form>
		</div>
		<div class="spacing"></div>
	</div>

@stop