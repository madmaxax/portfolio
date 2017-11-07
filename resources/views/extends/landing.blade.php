@extends('front-landing')

@section('title')

	<title>Maximilian Muza | Internetseiten erstellen</title>

@stop

@section('metaTag')

	<meta name="description" content="Alles über Websites und die Möglichkeit deinen Umsatz zu steigern. So begeisterst du deine Kunden..">
    <meta name="keywords" content="Internetseiten, Website erstellen, Homepage erstellen, Umsatz, Besucher zu Kunden, Wie gewinne" />

@stop

@section('content')

    	<div class="backgroundContent">
		    <div class="topCard">
		    	<img class="topCard__picture displayNone" src="/img/internetseite.jpg">
		    	<img class="topCard__picture display" src="/img/responsive_design.png">
		    </div>
		    <div class="underlay">
				<div class="introduction flex--new">
					<div class="introduction__roundBox roundBox flex boxShadow">
						<img class="introduction__icons" src="/img/aufmerksamkeit.png">
						<h3>Aufmerksamkeit</h3>
						<p>Eine Website ermöglicht dir viele Leute auf dein Unternehmen aufmerksam zu machen -nicht nur die, die bereits interessiert sind.</p>
					</div>
					<div class="introduction__roundBox roundBox flex boxShadow">
						<img class="introduction__icons" src="/img/kunden.png">
						<h3>Kunden</h3>
						<p>Hast du Schwierigkeiten Neukunden zu gewinnen? Eine Website hilft dir Kunden zu gewinnen und Rückmeldungen einzuholen.</p>
					</div> 
					<div class="introduction__roundBox roundBox flex boxShadow">
						<img class="introduction__icons" src="/img/einnahmen.png">
						<h3>Umsatz</h3>
						<p>Glaubst du, dass eine Website nur Öffnungzeiten und Kontaktdaten darstellen kann? Erfahre wie du sie noch viel besser nutzen kannst.</p>
					</div>
				</div>
				<div class="extraInformation">
					<div class="width--40 textCenter">
						<h2>.. Stelle dir vor du könntest von allem mehr erreichen.</h2>
					</div>
				</div>
			</div>
			<div class="standardCard leistungen">
				<h2 class="textCenter paddingLeft paddingRight">.. Meine Internetseiten machen es möglich!</h2>
				<div class="row">
					<div class="box--pic">
						<img class="erfolg__img boxShadow" src="/img/kaffee.jpg">
					</div>
					<div class="box">
						<div class="paddingLeft">
							<div class="box-aa content">
								<h3 class="marginZero boldParagraph">Du führst ein regionales Unternehmen und hast Schwierigkeiten neue Kunden zu gewinnen?</h3>
								<p>Wie wäre es mit einer Internetseite, die Besucher begeistert? Eine Internetseite auf der deine Besucher von deiner Arbeit und deinen Zielen lernen. Auf der sie wertvolle Tipps von dir erhalten.</p>
								<p class="displayNone">Du hast einen Fahrradladen? Erzähle ihnen wie man die Kette ölt. Das stärkt die Kundenbeziehung.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="box">
						<div class="paddingRight">
							<div class="box-aa content">
								<h3 class="marginZero boldParagraph">Setze dich von deiner Konkurrenz ab.</h3>
								<p>Kunden wollen gehört werden. Auch nach ihrem Einkauf. Gib ihnen die Möglichkeit Rückmeldungen abzugeben oder einfach nur in Kontakt zu treten. Das kann dir zudem helfen dein Produkt bzw. deine Dienstleistung zu verbessern.</p>
							</div>
						</div>
					</div>
					<div class="box--pic marginRight">
						<img class="erfolg__img boxShadow" src="/img/kaffee.jpg">
					</div>
				</div>
				<div class="row">
					<div class="box--pic marginRight">
						<img class="erfolg__img boxShadow" src="/img/café.jpg">
					</div>
					<div class="box">
						<div class="paddingLeft">
							<div class="box-aa content">
								<h3 class="marginZero boldParagraph">Lasse die Vergangenheit hinter dir.</h3>
								<p>Warum ermöglichst du deinen Besuchern nicht mit nur einem Klick einen Termin zu vereinbaren oder einen Tisch zu reservieren? Meine Internetseiten haben das Ziel dein Produkt oder deine Dienstleistung für Besucher leicht erhältlich zu machen.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
 			<div class="standardCard responsiveDesign textCenter">
				<h2 class="width--50">Hast du schon hieran gedacht?</h2>
				<h2 class="width--50 boldParagraph">Mehr Leute besuchen Internetseiten heutzutage vom Handy als vom Desktop.</h2>
				<img class="responsiveDesign__img responsiveDesign__marginTop" src="/img/responsiveness.jpg">
				<div class="responsiveDesign__container">
					<div class="box--pic marginRight">
						<h3 class="marginZero boldParagraph">Hole dir deinen Vorsprung.</h3>
					</div>
					<div class="box">
						<div class="paddingLeft">
							<div class="box-aa content">
								<p>Egal ob Besucher meine Internetseiten vom Handy, Tablet oder Computer öffnen, ich werde sicher gehen, dass sie perfekt dargestellt ist. Mein Ziel ist es sie übersichtlich, schön auf allen Geräten zu machen. Nur so kann ich das beste Erlebnis garantieren.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
 			<div class="ad">
		        <div class="ad__contentContainer">
		            <h2 class="fontSize--36">Nutze die großartigen Möglichkeiten, die eine Internetseite deinem Unternehmen bietet.</h2>
		            <p>Ich helfe dir gerne dabei, dein Unternehmen erfolgreich im Internet zu präsentieren.</p>
		            <a href="mailto:maximilian.muza@gmx.de" class="standardButton">GRATIS ANGEBOT ERFRAGEN</a>
		        </div>
		    </div>
			@include('extends._blog')
			<div class="dasBinIch__wrapper flex displayNone">
			  	<div class="dasBinIch__container">
					<div class="box--pic dasBinIch__boxChange">
						<img class="dasBinIch__img" src="/img/portrait.jpg">
					</div>		
					<div class="box dasBinIch__boxChange paddingLeft">
						<p>Mein Ziel ist es lokalen Unternehmen zu helfen, sich für die digitale Zukunft vorzubereiten.</p>
						<a href="mailto:maximilian.muza@gmx.de" class="standardButton">JETZT KONTAKTIEREN</a>
					</div>
				</div>
			  </div>
	    </div>

@stop