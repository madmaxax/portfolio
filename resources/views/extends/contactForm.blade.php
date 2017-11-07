@extends('front-blog')

@section('title')

	<title>Maximilian Muza | Internetseiten erstellen</title>

@stop

@section('metaTag')

	<meta name="description" content="Fragst du dich wie du deine Website besser nutzen kannst? Wie du mit ihr mehr Erfolg haben kannst? Dann zögere nicht mich zu kontaktieren!">
    <meta name="keywords" content="Fragen, Kontakt, Wie gewinne, Internetseiten, Website erstellen, Homepage erstellen" />

@stop

@section('content')
	
	<div class="contactForm__wrapper">
		<h1 class="textCenter">Kontakt</h1>
		<div class="contactForm flex boxShadow roundBox">
			<h2>Ich freue mich von dir zu hören!</h2>
			<form action="{{ route('sendmail') }}" method="post">
				<div class="contactForm__group">
					<input type="text" name="name" required>
					<span class="bar"></span>
	      			<label>Name</label>
				</div>
				<div class="contactForm__group">
					<input type="email" name="mail" required>
					<span class="bar"></span>
	      			<label>Email</label>
				</div>
				<div class="contactForm__group">
					<input type="text" name="nachricht" required>
					<span class="bar"></span>
	      			<label>Nachricht</label>
				</div>
				<button type="submit">Sende</button>
				{{ csrf_field() }}
			</form>

		</div>
	</div>

@stop