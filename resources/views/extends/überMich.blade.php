@extends('front-small')

@section('title')

	<title>Über Maximilian Muza</title>

@stop

@section('metaTag')

	<meta name="description" content="{{ __('small.aboutMetaDescription') }}">
    <meta name="keywords" content="{{ __('small.aboutMetaKeys') }}">

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
		<h2 class="topCard__headline">{{ __('small.welcome') }}</h2>
	</div>
	<div class="impressum__contentContainer">
		<div class="standardCard">
			<div class="center width--40">
				<h2>{{ __('small.aboutHeadline') }}</h2>
				<p>{{ __('small.aboutText1') }}</p>
				<h3 class="boldParagraph">{{ __('small.aboutText2') }}</h3>
				<p>{{ __('small.aboutText3') }}</p>
				<div class="highlight boxShadow">
					<p>{{ __('small.aboutText4') }}</p>
				</div>
				<p>{{ __('small.aboutText5') }}</p>
				<p>{{ __('small.aboutText6') }}</p>
				<p>{{ __('small.aboutText7') }}</p>
				<p>{{ __('small.aboutText8') }}</p>	
				<div class="signature">
					<p class="colorRed">{{ __('small.bye') }},</p>
					<p>Maximilian Muza</p>
				</div>
				<p>{{ __('small.thankyou') }}</p>
				<a href="mailto:muza.maximilian@gmail.com" class="standardButton">{{ __('landing.sixthCardButton') }}</a>
			</div>
		</div>
		<div class="dasBinIch__wrapper flex displayNone">
			<div class="dasBinIch__container">
				<div class="box--pic dasBinIch__boxChange">
					<img class="dasBinIch__img" src="/img/portrait.jpg" alt="portait">
				</div>		
				<div class="box dasBinIch__boxChange paddingLeft">
					<p>{{ __('landing.sixthCardText') }}</p>
				</div>
			</div>
		</div>
	</div>
</div>
@stop