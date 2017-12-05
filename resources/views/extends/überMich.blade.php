@extends('front-small')

@section('title')

	<title>Über Maximilian Muza</title>

@stop

@section('metaTag')

	<meta name="description" content="Das bin ich. Maximilian Muza. Der Spaß am Erstellen von Internetseiten beweget mich dazu immer Neues auszuprobieren. Lerne mehr hier.">
    <meta name="keywords" content="professionell, erfolgreich, Webdesign Kiel, Internetseiten, Online Marketing, Muza, Maximilian Muza, Kleinunternehmen">

@stop

@section('setHeader')

	@php 

		$NavWhite = false

	@endphp

@stop

@section('content')
<div class="content__wrapper">
	<div class="topCard">
		<img class="topCard__picture displayNone" src="/img/internetseite.jpg" alt="website">
		<img class="topCard__picture display" src="/img/responsive_design.png" alt="homepage">
		<h2 class="topCard__headline">Willkommen!</h2>
	</div>
	<div class="impressum__contentContainer">
		<div class="standardCard">
			<div class="center width--40">
				<h2>Mein Name ist Maximilian Muza und ich habe großen Spaß am Lernen, Helfen und Verbinden.</h2>
				<p>Seit ungefähr einem Jahr erstelle ich Internetseiten. Oft bemerkte ich in diesem Zeitraum Unternehmen wie kleine Cafés oder Frisöre, die auf ihrer Internetseite nur die Kontaktdaten und ein Satz zu ihrer Arbeit haben.</p>
				<h3 class="boldParagraph">Gibt es keine anderen Möglichkeiten Internetseiten besser zu nutzen?</h3>
				<p>Doch! Ich bin überzeugt, dass eine Internetseite für jedes Unternehmen großartige Möglichkeiten bietet -  egal ob es ein Fahrradladen, eine Arztpraxis oder ein Frisör ist.</p>
				<div class="highlight boxShadow">
					<p>Mit meiner Arbeit erhoffe ich mir lokalen Unternehmen mit ehrgeizigen Zielen helfen zu können deren Möglichkeiten auszuschöpfen.</p>
				</div>
				<p>Ich verdiene mein Geld mit dem Erstellen von Internetseiten. Das hält mich aber nicht davon ab, ständig neue <span>kostenlose Materialien und Kurse zu veröffentlichen.</span> Mein Ziel ist es diesen Teil meiner Arbeit in Zukunft zu erhöhen. Nach meiner Meinung sollten Unternehmer besser aufgeklärt werden, wie sie ihren Erfolg mit einer Internetseite erhöhen können und wie sie vorgehen könnten.</p>
				<p>Ok, zugeblich! Bis jetzt habe ich viel von den großartigen Möglichkeiten geschwärmt, aber nichts weiter erklärt.</p>
				<p>Du bist ehrgeizig und <span>hast Lust mehr darüber zu lernen?</span> Dann schaue dich doch in meinem <a class="blogLink" href="./klassenraum.html">Klassenraum</a> um. Ich bin mir sicher, dass du in den Kursen die ein oder andere Anregung finden wirst.</p>
				<p>Ich hoffe die Kurse werden deine Interesse wecken und all deine Fragen klären. Wenn das nicht der Fall ist, melde dich unbedingt bei mir! Ich bin ständig dabei, besseren Inhalt zu produzieren und bin über jede Nachfrage dankbar.</p>	
				<div class="signature">
					<p class="colorRed">Bis bald,</p>
					<p>Maximilian Muza</p>
				</div>
				<p>P.S.: Und danke, dass du hier bist. Ich bin froh über deinen Besuch und würde gerne von dir hören.</p>
				<a href="mailto:muza.maximilian@gmail.com" class="standardButton">SCHREIBE MIR</a>
			</div>
		</div>
		<div class="dasBinIch__wrapper flex displayNone">
			<div class="dasBinIch__container">
				<div class="box--pic dasBinIch__boxChange">
					<img class="dasBinIch__img" src="/img/portrait.jpg" alt="portait">
				</div>		
				<div class="box dasBinIch__boxChange paddingLeft">
					<p>Mein Ziel ist es lokalen Unternehmen zu helfen, sich für die digitale Zukunft vorzubereiten.</p>
				</div>
			</div>
		</div>
	</div>
</div>
@stop