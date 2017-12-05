@extends('front-small')

@section('title')

	<title>Meine Leistungen | Maximilian Muza</title>

@stop

@section('metaTag')

	<meta name="description" content="Besonders wichtig ist es deine Internetseite richtig zu nutzen. Lass mir dir helfen sie zum Erfolg zu machen!">
    <meta name="keywords" content="Erfolg mit Homepage, Internetseite erstellen, Kunden gewinnen, Marketing, Webdesign, regionales Unternehmen, Kleinunternehmen, Kiel">

@stop

@section('setHeader')

	@php 

		$NavWhite = true

	@endphp

@stop

@section('content')
<div class="content__wrapper">
	<div class="standardCard leistungen">
		<h2 class="textCenter">Meine Leistungen</h2>
		<div class="center row--specific">
			<div class="box--pic">
				<img class="testing" src="/img/webdesign.jpg" alt="webdesign">
			</div>
			<div class="box">
				<div class="leistungen__container">
					<div class="box-aa content content">
						<h3>Webdesign</h3>
						<p>Ein gutes Webdesign zeichnet sich besonders durch zwei Punkte aus: Überschaubarkeit, Stimmigkeit. Es ist wichtig für deine Besucher, dass sie schnell und einfach die benötigten Informationen finden. Dabei ist jedoch eine Übereinstimmung deines Unterehmens, des Charakters mit Form und Farbe der Internetseite unverzichtbar.</p>
					</div>
					<div class="paddingTop">
						<div class="box-aa content content">
							<h3>Programmieren</h3>
							<p>Meine Stärke ist das Programmieren der Internetseite. Hierbei lege ich Wert auf einfachen Code. Nur so kann ich eine gute Qualität und eine schnelle Ladezeit garantieren.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="center row--specific">
			<div class="box">
				<div class="leistungen__container">
					<div class="box-aa content content paddingRight">
						<h3>SEO</h3>
						<p>Die Suchmaschinenoptimierung zählt zum Fundament einer jeden Internetseite. Was bringt eine Internetseite, wenn kaum jemand sie findet? Mein Schwerpunkt liegt darauf schnell und einfach gefunden zu werden, um so eine hohe Anzahl an Besuchern zu erreichen.</p>
					</div>
					<div class="paddingTop">
						<div class="box-aa content content paddingRight">
							<h3>Soziale Medien Marketing</h3>
							<p>Die Vermarktung von deinem Unternehmen ist heutzutage fast unabdingbar und gehört zur erfolgreichen Online Präsenz mit dazu. Im diesem Bereich bin ich relativ neu. Zusammen mit dir werden wir ein Konzept und verschiedene Ziel festlegen.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="box--pic textCenter">
				<img class="testing" src="/img/suchmaschinenoptimierung.jpg" alt="suchmaschinenoptimierung">
			</div>
		</div>
	</div>
	<div class="standardCard prozess">
		<div class="card__container">
			<h2 class="textCenter">Mein Vorgehen</h2>
			<!-- <h3 class="textCenter prozessText">Ich finde es faszinierend zu sehen wie viele Menschen du mit einer erfolgreichen Online Präsenz erreichen könntest. Egal ob du ein lokal tätiges Unterehmen führst oder nicht.</h3> -->
			<div class="scrollmenu">
				<div class="card">
					<div class="blueHighlight">
						<p>SCHRITT 1</p>
					</div>
					<div class="prozessText__container">
						<h3 class="marginTop">Planen</h3>
						<p>Gemeinsam werden wir uns zusammensetzen, um deine Ziele und Wünsche zu verstehen. Wichtig ist es außerdem den Charakter deines Unternehmens passend aufzunehmen. Nur dann ist es möglich eine passende Internetseite zu erstellen.</p>
					</div>
				</div>
				<div class="card">
					<div class="blueHighlight">
						<p>SCHRITT 2</p>
					</div>
					<div class="prozessText__container">
						<h3 class="marginTop">Designen</h3>
						<p>Mithilfe der Informationen aus unserer Zusammenarbeit werde ich ein Layout erstellen. Von großer Bedeutung ist sowohl eine einfache Benutzung für deinen Besucher als auch eine Übereinstimmung des Unternehmens mit den Elementen Farbe und Form</p>
					</div>
				</div>
				<div class="card">
					<div class="blueHighlight">
						<p>SCHRITT 3</p>
					</div>
					<div class="prozessText__container">
						<h3 class="marginTop">Programmieren</h3>
						<p>Das fertiggestellte Design wird nun zu Code. Hierbei lege ich nicht nur wert auf die richtige Darstellung, sondern auch auf die individuelle Anpassung der Internetseite für Suchmaschinen. So wird sie eher von Interessierten gefunden.</p>
					</div>
				</div>
				<div class="card">
					<div class="blueHighlight">
						<p>SCHRITT 4</p>
					</div>
					<div class="prozessText__container">
						<h3 class="marginTop">Testen</h3>
						<p>Durch mehrfaches Testen will ich sicher gehen, dass keine Fehler auf der Internetseite sind. Aus der Position eines zukünftigen Besuchers werde ich Beurteilen wie einfach man navigieren kann und wie schnell die Seite geladen wird.</p>
					</div>
				</div>
				<div class="card">
					<div class="blueHighlight">
						<p>SCHRITT 5</p>
					</div>
					<div class="prozessText__container">
						<h3 class="marginTop">Veröffentlichen</h3>
						<p>Nach dem abschließenden Überarbeiten der Internetseite wird sie ins Internet hochgeladen, sodass sie für jeden ersichtlich ist. Dafür werde ich sie außerdem bei Suchmaschinen wie Google anmelden. Nur so wird sie dort auffindbar sein.</p>
					</div>
				</div>
				<div class="card">
					<div class="blueHighlight">
						<p>SCHRITT 6</p>
					</div>
					<div class="prozessText__container">
						<h3 class="marginTop">Betreuen</h3>
						<p>Mir ist es wichtig, dass dir die Relevanz und Möglichkeiten eines Internetauftritts klar werden. Darum erhälst du Zugang zu umfangreichen Materialien. Sie helfen dir dabei, dein Unternehmen im Internet erfolgreich zu präsentieren.</p>
					</div>
				</div>
				<div id="try" class="mehrAnzeiger">
					<div>MEHR
						<div class="animation">
							<i class="arrowRight"></i><i class="arrowRight"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop