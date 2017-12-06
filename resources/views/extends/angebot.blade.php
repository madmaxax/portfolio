@extends('front')

@section('title')

	<title>Angebot | Maximilian Muza</title>

@stop

@section('metaTag')

	<meta name="description" content="Du möchtest wissen wie teuer ein neue Internetauftritt ist? Das und weitere Fragen erkläre ich dir gerne.">
    <meta name="keywords" content="Fragen, Angebot, Angebot erfragen, Webdesign, Kontakt, Wie gewinne, Internetseiten, Website erstellen, Homepage erstellen" />

@stop

@section('setHeader')

	@php 

		$NavWhite = true

	@endphp

@stop

@section('content')
<h1 class="textCenter">Angebot unverbindlich erfragen</h1>
<div class="anfrage">
	<article class="infobox">
		<form action="{{ route('angebot') }}" method="post">
		    <section id="dein-was">
		        <h2>Was bist du bereit zu machen, für den maximalen Erfolg?</h2>
		        <p>Was stehen Informationen zu den Erfolg.</p>
		        <input type="radio" id="blog" name="blog">
		        <label for="blog">blog</label>
		        <input type="radio" id="socialmedia" name="socialmedia">
		        <label for="socialmedia">socialmedia</label>
		        <input type="radio" name="contentupdate">
		        <label for="contentupdate">contentupdate</label>
		        <a href="#dein-link" class="standardButton">Weiter</a>
		    </section>
		    <section id="dein-link">
		        <h2>Hast du bereits eine Internetseite?</h2>
		        <p>url stehen Informationen zu den Internetseite.</p>
		        <input type="url" id="url" name="url">
		        <a href="#dein-name" class="standardButton">Weiter</a>
		    </section>
		    <section id="dein-name">
		        <h2>Name:</h2>
		        <p>Hier stehen Informationen zu den Name.</p>
		        <input type="text" id="name" name="name">
		        <a href="#deine-mail" class="standardButton">Weiter</a>
		    </section>
		    <section id="deine-mail">
		        <h2>E-Mail:</h2>
		        <p>Hier stehen Informationen zu den mail.</p>
		        <input type="text" id="mail" name="mail">
		        <button type="submit" class="standardButton">Anfrage abschicken</a>
		    </section>
		    <section id="dein-wen">
		        <h2>Wen willst du mit deinem Internetauftritt ansprechen?</h2>
		        <p>Hier stehen Informationen zu den Internetauftritt.</p>
		        <input type="radio" id="uninteressierte" name="uninteressierte">
		        <label for="uninteressierte">uninteressierte</label>
		        <input type="radio" name="interessierte">
		        <label for="interessierte">interessierte</label>
		        <a href="#dein-was" class="standardButton">Weiter</a>
		    </section>
		    {{ csrf_field() }}
		</form>
	</article>
</div>


<!-- 		<div class="contactForm flex boxShadow roundBox">
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
	</div> -->

@stop