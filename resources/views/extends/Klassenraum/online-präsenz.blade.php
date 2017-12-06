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
<div class="content__wrapper">
	<div class="impressum__contentContainer">
		<img class="blogSpecific__largePicture center" src="/img/kreativ.jpeg" alt="Konkurrenz Wettkampf">
		<div class="row">
			<h1 class="impressum__headline">So erstellst du eine erfolgreiche Online Präsenz.</h1>
			<p>Laut Google nutzen 97% der Konsumenten das Internet um nach lokalen Unternehmen zu Suchen. Das bedeutet, es ist deine Pflicht dein Unternehmen erfolgreich im Internet zu präsentieren - egal welcher Branche du angehörst.</p>
			<img class="blogSpecific__picture center" src="/img/kreativ.jpeg" alt="Internetseite falsch genutzt">
			<h2 class="boldHeadline">Lerne jetzt in zwei kompakten Modulen alles rund um Erfolg und Aufmerksamkeit im Internet.</h2>
			<h4 class="klassenraum__listItems">Das kannst du erwarten:</h4>
			<div class="modul__container">
				<div id="modul1Click" class="modul flex">
					<i class="icon-desktop"></i>
					<p>Schöpfe das Potential deiner Internetseite gekonnt aus</p>
					<i class="icon-down-open"></i>
				</div>
				<div id="modul1" class="modul--extended" style="display: none;">
					<h4 class="klassenraum__listItems">Schöpfe das Potential deiner Internetseite gekonnt aus.</h4>
					<p>Oft bin ich Leuten begegnet, die eine Internetseite haben, jedoch nicht das volle Potential nutzen. Darum habe ich dieses Modul entwickelt. Es wird folgenden Fragen begegnen:</p>
					<ul>
						<li class="overview__listItems">Was muss unbedingt auf meine Internetseite?</li>
						<li class="overview__listItems">Wie begeistere ich neue noch uninteressierte Besucher und gewinne neue Kunden?</li>
						<li class="overview__listItems">Macht es Sinn einen Blog zu schreiben oder ist es unnötige Arbeit?</li>
						<li class="overview__listItems">Wie erreiche ich Handy Nutzer mit meiner Internetseite erfolgreich?</li>
					</ul>
				</div>
				<div id="modul2Click" class="modul flex">
					<i class="icon-users"></i>
					<p>Soziale Medien: So baust du eine Verbindung mit deinen Kunden auf</p>
					<i class="icon-down-open"></i>
				</div>
				<div id="modul2" class="modul--extended" style="display: none;">
					<h4 class="klassenraum__listItems">Soziale Medien: So baust du eine Verbindung mit deinen Kunden auf.</h4>
					<p>Mit weltweit über 2 Milliarden aktiven Nutzer auf den Social Media Plattformen ist es für dich besonders wichtig dort anzusetzen. Natürlich, wirst du nicht über Nacht Erfolg sehen. In diesem Modul wirst du folgenden Fragen begegnen:</p>
					<ul>
						<li class="overview__listItems">Warum sind die sozialen Medien heute unabdingbar?</li>
						<li class="overview__listItems">Win sozialen Netzwerken?</li>
						<li class="overview__listItems">Wie trete ich mit meinen Kunden, aber auch mit neuen Besuchern in Kontakt?</li>
						<li class="overview__listItems">Wie könne meine Kunden von mir profitieren?</li>
					</ul>
				</div>
				<div class="spacing"></div>
			</div>
			<div class="knowledge__test">
				<a href="/klassenraum/online-präsenz/potential-internetseite/" class="standardButton"><span>Los gehts</span><i class="icon-right-open"></i></a>
			</div>
		</div>
	</div>
</div>
@include('/includes/_mediaIcons')
@stop