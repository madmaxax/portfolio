@extends('front-small')

@section('title')

	<title>{{ __('small.servicesHeadline') }} | Maximilian Muza</title>

@stop

@section('metaTag')

	<meta name="description" content="{{ __('small.servicesMetaDescription') }}">
    <meta name="keywords" content="{{ __('small.servicesMetaKeys') }}">

@stop

@section('setHeader')

	@php 

		$NavWhite = true

	@endphp

@stop

@section('content')
<div class="content__wrapper">
	<div class="standardCard leistungen">
		<h2 class="textCenter">{{ __('small.servicesHeadline') }}</h2>
		<div class="center row--specific">
			<div class="box--pic">
				<img class="testing" src="/img/webdesign.jpg" alt="webdesign">
			</div>
			<div class="box">
				<div class="leistungen__container">
					<div class="box-aa content content">
						<h3>{{ __('small.service1Headline') }}</h3>
						<p>{{ __('small.service1Text') }}</p>
					</div>
					<div class="paddingTop">
						<div class="box-aa content content">
							<h3>{{ __('small.service2Headline') }}</h3>
							<p>{{ __('small.service2Text') }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="center row--specific">
			<div class="box">
				<div class="leistungen__container">
					<div class="box-aa content content paddingRight">
						<h3>{{ __('small.service3Headline') }}</h3>
						<p>{{ __('small.service3Text') }}</p>
					</div>
					<div class="paddingTop">
						<div class="box-aa content content paddingRight">
							<h3>{{ __('small.service4Headline') }}</h3>
							<p>{{ __('small.service4Text') }}</p>
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
			<h2 class="textCenter">{{ __('small.processHeadline') }}</h2>
			<div class="scrollmenu">
				<div class="card">
					<div class="blueHighlight">
						<p>{{ __('small.step') }} 1</p>
					</div>
					<div class="prozessText__container">
						<h3 class="marginTop">{{ __('small.step1Headline') }}</h3>
						<p>{{ __('small.step1Text') }}</p>
					</div>
				</div>
				<div class="card">
					<div class="blueHighlight">
						<p>{{ __('small.step') }} 2</p>
					</div>
					<div class="prozessText__container">
						<h3 class="marginTop">{{ __('small.step2Headline') }}</h3>
						<p>{{ __('small.step2Text') }}</p>
					</div>
				</div>
				<div class="card">
					<div class="blueHighlight">
						<p>{{ __('small.step') }} 3</p>
					</div>
					<div class="prozessText__container">
						<h3 class="marginTop">{{ __('small.step3Headline') }}</h3>
						<p>{{ __('small.step3Text') }}</p>
					</div>
				</div>
				<div class="card">
					<div class="blueHighlight">
						<p>{{ __('small.step') }} 4</p>
					</div>
					<div class="prozessText__container">
						<h3 class="marginTop">{{ __('small.step4Headline') }}</h3>
						<p>{{ __('small.step4Text') }}</p>
					</div>
				</div>
				<div class="card">
					<div class="blueHighlight">
						<p>{{ __('small.step') }} 5</p>
					</div>
					<div class="prozessText__container">
						<h3 class="marginTop">{{ __('small.step5Headline') }}</h3>
						<p>{{ __('small.step5Text') }}</p>
					</div>
				</div>
				<div class="card">
					<div class="blueHighlight">
						<p>{{ __('small.step') }} 6</p>
					</div>
					<div class="prozessText__container">
						<h3 class="marginTop">{{ __('small.step6Headline') }}</h3>
						<p>{{ __('small.step6Text') }}</p>
					</div>
				</div>
				<div id="try" class="mehrAnzeiger">
					<div>{{ __('small.more') }}
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