@extends('front-small')

@section('title')

	<title>Klassenraum | Maximilian Muza</title>

@stop

@section('metaTag')

	<meta name="description" content="Dein Interesse für eine Website ist geweckt, du weißt aber noch nicht wie du sie am erfolgreichsten nutzt? Erfahre mehr von meinen Erfolgsgeheimnissen im Klassenraum..">
    <meta name="keywords" content="Erfolg mit Internetseite, Website erstellen, Homepage erstellen, Klassenraum, Umsatz erhöhen, mehr Kunden, regionales Unternehmen">
@stop

@section('setHeader')

	@php 

		$NavWhite = true

	@endphp

@stop

@section('content')
    <div class="content__wrapper">
	<div class="standardCard blog textCenter">
		<h2>Klassenraum</h2>
		<div class="blog__largeCard makeAuto boxShadow center displayNone--blog">
			<div class="blog__category red">Kurs</div>
			<a href="/klassenraum/online-präsenz/">	
			    <img class="blog__largePicture" src="/img/ideen.jpeg" alt="erstelle erfolgreiche Online Präsenz">
			    <div class="blog__largeTextContainer">
			        <h3 class="fontSize--26 marginLeft--special">So erstellst du eine erfolgreiche Online Präsenz.</h3>
			        <p class="marginLeft--special">Zugeblich: Es braucht Ausdauer, sehr sehr viel Ausdauer. Doch das kann nicht das einzige sein ...</p>
			        <button class="marginLeft--special">Erfahre mehr zum Thema</button>
			    </div>
			</a>
		</div>
		<div class="blog__card makeAuto boxShadow display--blog">
			<div class="blog__category red">Kurs</div>
			<a href="/klassenraum/online-präsenz/">	
			    <img class="blog__picture" src="/img/ideen.jpeg" alt="erstelle erfolgreiche Online Präsenz">
			    <div class="blog__textContainer">
			        <h3 class="fontSize--26 marginLeft--special">So erstellst du eine erfolgreiche Online Präsenz.</h3>
			        <p class="fontSize--15 marginLeft--special">Zugeblich: Es braucht Ausdauer, sehr sehr viel Ausdauer. Doch das kann nicht das einzige sein ...</p>
			        <button class="marginLeft--special">Erfahre mehr zum Thema</button>
			    </div>
			</a>
		</div>
		<div class="blog__card makeAuto boxShadow">
			<div class="blog__category blue">Artikel</div>
			<a href="/klassenraum/blog-für-dein-unternehmen/">	
			    <img class="blog__picture" src="/img/blog.jpg" alt="8 Webdesign Fehler die du vermeiden solltest">
				<div class="blog__textContainer">
				    <h3 class="fontSize--26 marginLeft--special">3 Gründe einen Blog zu beginnen.</h3>
				    <p class="fontSize--15 marginLeft--special">Lerne jetzt wie ein Blog dir helfen kann, deinen Umsatz zu erhöhen ...</p>
				    <button class="marginLeft--special">Erfahre mehr zum Thema</button>
				</div>
			</a>
		</div>
		<div class="blog__card makeAuto boxShadow">
			<div class="blog__category blue">Artikel</div>
			<a href="/klassenraum/konkurrenz/">	
			    <img class="blog__picture" src="/img/konkurrenz.jpg" alt="von konkurrenz absetzen">
			    <div class="blog__textContainer">
			        <h3 class="fontSize--26 marginLeft--special">3 Möglichkeiten dich von der Konkurrenz abzusetzen.</h3>
			        <p class="fontSize--15 marginLeft--special">Bist du dir unsicher wie du dich am besten von der Konkurrenz abheben kannst? Wie wäre es ...</p>
			        <button class="marginLeft--special">Erfahre mehr zum Thema</button>
			    </div>
			</a>
		</div>
		<div class="spacing"></div>
	</div>
</div>

@stop