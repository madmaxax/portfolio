@extends('front-landing')

@section('title')

	<title>{{ __('landing.title') }} | Maximilian Muza</title>

@stop

@section('metaTag')

	<meta name="description" content="{{  __('landing.metaDescription') }}">
    <meta name="keywords" content="{{  __('landing.metaKeys') }}">
    <meta property="og:url" content="http://maximilianmuza.de" />
	<meta property="og:type" content="homepage" />
	<meta property="og:title" content="Maximilian Muza: Internetseiten Erstellung" />
	<meta property="og:description" content="So erstellst du einen Internetauftritt mit dem Ziel neue Kunden zu gewinnen." />
	<meta property="og:image" content="http://maximilianmuza.de/img/M.png" />

@stop

@section('content')
<div class="content__wrapper">
	<div class="backgroundContent">
		<div class="topCard">
		    <img class="topCard__picture displayNone" src="/img/internetseite.jpg" alt="website">
		    <img class="topCard__picture display" src="/img/responsive_design.png" alt="homepage">
		</div>
		<div class="underlay">
			<div class="introduction flex--new">
				<div class="introduction__roundBox roundBox flex boxShadow">
					<img class="introduction__icons" src="/img/aufmerksamkeit.png" alt="die Aufmerksamkeit maximieren">
					<h3>{{ __('landing.topCardOneHeadline') }}</h3>
					<p>{{ __('landing.topCardOneText') }}</p>
				</div>
				<div class="introduction__roundBox roundBox flex boxShadow">
					<img class="introduction__icons" src="/img/kunden.png" alt="mehr Kunden gewinnen">
					<h3>{{ __('landing.topCardTwoHeadline') }}</h3>
					<p>{{ __('landing.topCardTwoText') }}</p>
				</div> 
				<div class="introduction__roundBox roundBox flex boxShadow">
					<img class="introduction__icons" src="/img/einnahmen.png" alt="Einnahmen erhöhen">
					<h3>{{ __('landing.topCardThreeHeadline') }}</h3>
					<p>{{ __('landing.topCardThreeText') }}</p>
				</div>
			</div>
			<div class="extraInformation">
				<div class="width--40 textCenter">
					<h2>{{ __('landing.topCardSummary') }}</h2>
				</div>
			</div>
		</div>
		<div class="standardCard leistungen">
			<h2 class="textCenter mobilePadding mobilePadding">{{ __('landing.secondCardIntro') }}</h2>
			<div class="row">
				<div class="box--pic">
					<img class="erfolg__img boxShadow" src="/img/schlange.jpg" alt="geschäft">
				</div>
				<div class="box">
					<div class="paddingLeft">
						<div class="box-aa content">
							<h3 class="marginZero boldParagraph">{{ __('landing.secondCardFirstHeadline') }}</h3>
							<p>{{ __('landing.secondCardFirstText') }}</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="box--pic marginRight display">
					<img class="erfolg__img boxShadow" src="/img/kaffee.jpg" alt="geschäft">
				</div>
				<div class="box">
					<div class="paddingRight">
						<div class="box-aa content">
							<h3 class="marginZero boldParagraph">{{ __('landing.secondCardSecondHeadline') }}</h3>
							<p>{{ __('landing.secondCardSecondText') }}</p>
						</div>
					</div>
				</div>
				<div class="box--pic marginRight displayNone">
					<img class="erfolg__img boxShadow" src="/img/kaffee.jpg" alt="frisör">
				</div>
			</div>
			<div class="row">
				<div class="box--pic marginRight">
					<img class="erfolg__img boxShadow" src="/img/tisch.jpg" alt="kaffee">
				</div>
				<div class="box">
					<div class="paddingLeft">
						<div class="box-aa content">
							<h3 class="marginZero boldParagraph">{{ __('landing.secondCardThirdHeadline') }}</h3>
							<p>{{ __('landing.secondCardThirdText') }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
 		<div class="standardCard responsiveDesign textCenter">
			<h2 class="width--50">{{ __('landing.thirdCardIntro1') }}</h2>
			<h2 class="width--50 boldParagraph">{{ __('landing.thirdCardIntro2') }}</h2>
			<img class="responsiveDesign__img responsiveDesign__marginTop" src="/img/responsiveness.jpg" alt="responsive Design">
			<div class="responsiveDesign__container mobilePadding">
				<div class="box--pic marginRight">
					<h3 class="marginZero boldParagraph">{{ __('landing.thirdCardHeadline') }}</h3>
				</div>
				<div class="box">
					<div class="paddingLeft">
						<div class="box-aa content">
							<p>{{ __('landing.thirdCardText') }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
 		<div class="ad">
		    <div class="ad__contentContainer">
		        <h2>{{ __('landing.fourthCardHeadline') }}</h2>
		        <p class="displayNone width--50 center">{{ __('landing.fourthCardText') }}</p>
		        <a href="/angebot-einholen/" class="standardButton">{{ __('landing.fourthCardButton') }}</a>
		    </div>
		</div>
		@if(App::isLocale('de'))
		<div class="standardCard blog textCenter">
			<h2>{{ __('landing.fifthCardHeadline') }}</h2>
			<h3 class="blog__description">{{ __('landing.fifthCardText') }}</h3>
			<div class="blog__card makeAuto boxShadow">
				<a href="/klassenraum/online-präsenz/">	
				    <img class="blog__picture" src="/img/ideen.jpeg" alt="erstelle erfolgreiche Online Präsenz">
				    <div class="blog__textContainer">
				        <h3 class="fontSize--26 marginLeft--special">{{ __('landing.fifthCard1Headline') }}</h3>
				        <p class="fontSize--15 marginLeft--special">{{ __('landing.fifthCard1Text') }}</p>
				        <button class="marginLeft--special">{{ __('landing.fifthCardButton') }}</button>
				    </div>
				</a>
			</div>
			<div class="blog__card makeAuto boxShadow">
				<a href="/klassenraum/blog-für-dein-unternehmen/">	
				    <img class="blog__picture" src="/img/blog.jpg" alt="8 Webdesign Fehler die du vermeiden solltest">
				    <div class="blog__textContainer">
				        <h3 class="fontSize--26 marginLeft--special">{{ __('landing.fifthCard2Headline') }}</h3>
				        <p class="fontSize--15 marginLeft--special">{{ __('landing.fifthCard2Text') }}</p>
				        <button class="marginLeft--special">{{ __('landing.fifthCardButton') }}</button>
				    </div>
				</a>
			</div>
			<div class="blog__card makeAuto boxShadow">
				<a href="/klassenraum/konkurrenz/">	
				    <img class="blog__picture" src="/img/konkurrenz.jpg" alt="von konkurrenz absetzen">
				    <div class="blog__textContainer">
				        <h3 class="fontSize--26 marginLeft--special">{{ __('landing.fifthCard3Headline') }}</h3>
				        <p class="fontSize--15 marginLeft--special">{{ __('landing.fifthCard3Text') }}</p>
				        <button class="marginLeft--special">{{ __('landing.fifthCardButton') }}</button>
				    </div>
				</a>
			</div>
			<div class="blog__card makeAuto">
				<a href="/klassenraum/">	
				    <img class="blog__picture" src="/img/kreativ.jpeg" alt="Internetseite falsch genutzt">
				    <div class="blog__textContainer">
				        <h3 class="fontSize--26 marginLeft--special">{{ __('landing.fifthCard4Headline') }}</h3>
				        <p class="fontSize--15 marginLeft--special">{{ __('landing.fifthCard4Text') }}</p>
				        <button class="marginLeft--special">{{ __('landing.fifthCardButton') }}</button>
				    </div>
				</a>
			</div>
			<div class="spacing"></div>
		</div>
		<div class="dasBinIch__wrapper flex displayNone">
			<div class="dasBinIch__container">
				<div class="box--pic dasBinIch__boxChange">
					<img class="dasBinIch__img" src="/img/portrait.jpg" alt="portait">
				</div>		
				<div class="box dasBinIch__boxChange paddingLeft">
					<p>{{ __('landing.sixthCardText') }}</p>
					<a href="/kontakt/" class="standardButton flex">{{ __('landing.sixthCardButton') }}</a>
				</div>
			</div>
		</div>
		@endif
	</div>
</div>
@stop

@section('googleScript')
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "http://maximilianmuza.de",
  "logo": "http://maximilianmuza.de/img/M.png",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+49-1578-2813332",
    "contactType": "customer service",
    "availableLanguage": "German"
  }],
  "sameAs": [
    "https://www.facebook.com/maximilianmuza/",
    "https://www.linkedin.com/in/maximilianmuza",
    "https://plus.google.com/114290443080274459125"
  ]
}
</script>
@stop