@extends('front-blog')

@section('title')

	<title>Erstelle eine erfolgreiche Online Präsenz</title>

@stop

@section('metaTag')

	<meta name="description" content="Du führst ein regionales Unternehmen und hast Schwierigkeiten es erfolgreich im Internet zu präsentieren und neue Kunden zu begeistern? Dann ist dieser Kurs genau für dich.">
    <meta name="keywords" content="Online Präsenz, Internetauftritt, Kurs, Internetseiten für Geschäft, Website erstellen, regionale Unternehmen">
    <meta property="og:type" content="kurs" />
	<meta property="og:title" content="Erstelle eine erfolgreiche Online Präsenz" />
	<meta property="og:description" content="Du führst ein regionales Unternehmen und hast Schwierigkeiten es erfolgreich im Internet zu präsentieren?" />
	<meta property="og:image" content="http://maximilianmuza.de/img/kreativ.jpeg" />

@stop

@section('setHeader')

	@php

		$nav = false;

	@endphp

@stop

@section('content')
@if(App::isLocale('en'))
	<div class="notAvailable__overlay">
		<div class="notAvailable__container">
			<h4>Alert!</h4>
			<hr>
			<p>This article is not yet available in english. I am sorry and will soon have the time to translate it!</p>
			<button class="standardButton blue" onclick="window.history.back();">Go Back</button>
		</div>
	</div>
@endif
<div class="content__wrapper">
	<div class="impressum__contentContainer">
		<img class="blogSpecific__largePicture center" src="/img/kreativ.jpeg" alt="Konkurrenz Wettkampf">
		<div class="row">
			<h1 class="impressum__headline">So erstellst du eine erfolgreiche Online Präsenz.</h1>
			<p>Laut Google nutzen 97% der Konsumenten das Internet um nach lokalen Unternehmen zu Suchen. Das bedeutet, es ist deine Aufgabe dein Unternehmen erfolgreich im Internet zu präsentieren - egal welcher Branche du angehörst oder wie regional dein Unternehmen ist.</p>
			<img class="blogSpecific__picture center" src="/img/kreativ.jpeg" alt="Internetseite falsch genutzt">
			<h2 class="boldHeadline">Lerne jetzt in zwei kompakten Modulen alles rund um Erfolg und Aufmerksamkeit im Internet.</h2>
			<h4 class="klassenraum__listItems">Das kannst du erwarten:</h4>
			<div class="modul__container">
				<div class="modul flex" onclick="toggleModul('modul1')">
					<i class="icon-desktop"></i>
					<p>Schöpfe das Potential deiner Internetseite gekonnt aus</p>
					<i class="icon-down-open"></i>
				</div>
				<div id="modul1" class="modul--extended" style="display: none;">
					<h4 class="klassenraum__listItems">Schöpfe das Potential deiner Internetseite gekonnt aus.</h4>
					<p>Oft bin ich Leuten begegnet, die eine Internetseite haben, jedoch nicht das volle Potential nutzen. Darum habe ich dieses Modul entwickelt. Es wird dir folgende Fragen beantworten:</p>
					<ul>
						<li class="overview__listItems">Was muss unbedingt auf meine Internetseite?</li>
						<li class="overview__listItems">Wie begeistere ich neue noch uninteressierte Besucher und gewinne neue Kunden?</li>
						<li class="overview__listItems">Macht es Sinn einen Blog zu schreiben oder ist es unnötige Arbeit?</li>
						<li class="overview__listItems">Wie erreiche ich Handy Nutzer mit meiner Internetseite erfolgreich?</li>
					</ul>
				</div>
				<div class="modul flex" onclick="toggleModul('modul2')">
					<i class="icon-users"></i>
					<p>Soziale Medien: So baust du eine Verbindung mit deinen Kunden auf</p>
					<i class="icon-down-open"></i>
				</div>
				<div id="modul2" class="modul--extended" style="display: none;">
					<h4 class="klassenraum__listItems">Soziale Medien: So baust du eine Verbindung mit deinen Kunden auf.</h4>
					<p>Mit weltweit über 2 Milliarden aktiven Nutzer in den Sozialen Netzwerken ist es für dich besonders wichtig dort anzusetzen - auch wenn, du nicht über Nacht Erfolg sehen wirst. Das Modul klärt dir folgende Fragen:</p>
					<ul>
						<li class="overview__listItems">Warum sind die sozialen Medien heute unabdingbar?</li>
						<li class="overview__listItems">Wie präsentiere ich mich gekonnt in sozialen Netzwerken?</li>
						<li class="overview__listItems">Wie trete ich mit meinen Kunden, aber auch mit neuen Besuchern in Kontakt?</li>
						<li class="overview__listItems">Wie können meine Kunden von meiner Seite profitieren?</li>
					</ul>
				</div>
				<div class="spacing"></div>
			</div>
			<div class="knowledge__test">
				<a id="overlayAlertClick" class="standardButton">	
					<span>Los gehts</span><i class="icon-right-open"></i>
				</a>
			</div>
			<div id="overlayAlert" class="overlay" style="display: none;">
				<div class="alert contactInfo__alert">
					<i id="overlayAlertClose" class="icon-cancel iconRight"></i>
		@if(unserialize(\Cookie::get('kursinfo'))[2] === null || false)
					<h3>Newsletter?</h3>
					<p class="marginZero">Du hast jetzt die Möglichkeit meinen wöchentlichen Newletter und damit wertvolle Inhalte komplett gratis zu erhalten. </p>
					<form action="{{ route('sendkursinfo') }}" method="post">
						<div class="contactForm__group">
							<input type="text" name="name" placeholder="Name">
						</div>
						<div class="contactForm__group">
							<input type="email" name="mail" placeholder="E-Mail">
						</div>
						<div class="contactForm__group">
							<input type="checkbox" name="subscribeNews">
							<label class="colorGrey" for="subscribeNews">Hiermit akzeptiere ich den Erhalt der wöchentlichen Newsletter</label>
						</div>
						<button type="submit" class="standardButton">Ab zum Kurs</button>
						{{ csrf_field() }}
					</form>
		@else
					<h3>Du hast den Kurs bereits schon einmal begonnen und willst jetzt weiter lernen?</h3>
					<p class="marginZero">Bis zu welchem Modul bist du gekommen?</p>
					<form action="{{ route('kurssecondtime') }}" method="post">
						<input type="radio" name="modul" value="potential-internetseite">
						<label class="colorGrey">Modul 1 - Potential einer Internetseite</label><br>
						<input type="radio" name="modul" value="soziale-medien">
						<label class="colorGrey">Modul 2 - Soziale Medien</label><br>
						<input type="radio" name="modul" value="test">
						<label class="colorGrey">Modul 3 - Test</label><br><br>
						<button type="submit" class="standardButton">Mache weiter</button>
						{{ csrf_field() }}
					</form>
		@endif
				</div>
			</div>
		</div>
	</div>
</div>
@include('/includes/_mediaIcons')
@stop

@section('googleScript')
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Course",
  "name": "Online Präsenz erstellen.",
  "description": "Der ultimative Guide, um dein Unternehmen erfoglreich im Internet zu vertreten.",
  "provider": {
    "@type": "Organization",
    "name": "Maximilian Muza",
    "sameAs": "maximilianmuza.de"
  }
}
</script>
@stop