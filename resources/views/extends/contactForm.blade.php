@extends('front-small')

@section('title')

	<title>Kontakt | Maximilian Muza</title>

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
			<h1>Kontakt</h1>
			<p>Name: Maximilian Muza</p>
			<p>E-Mail: muza.maximilian@gmail.com</p>
			<p>Telefon-Nr.: +49 1578 2813332</p>
		</div>
		<br>
		<div class="contactForm flex boxShadow roundBox">
			<h2 class="width--40">Ich freue mich von dir zu hören!</h2>
			<form action="{{ route('sendmail') }}" method="post">
				<div class="contactForm__group">
					<input class="width--300" type="text" name="name" required>
					<span class="bar"></span>
	      			<label class="label">Name</label>
				</div>
				<div class="contactForm__group">
					<input class="width--300" type="email" name="mail" required>
					<span class="bar"></span>
	      			<label class="label">Email</label>
				</div>
				<div class="contactForm__group">
					<input class="width--300" type="text" name="nachricht" required>
					<span class="bar"></span>
	      			<label class="label">Nachricht</label>
				</div>
				<button type="submit">Sende</button>
				{{ csrf_field() }}
			</form>
		</div>
		<div class="spacing"></div>
	</div>

@stop