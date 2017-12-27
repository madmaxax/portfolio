@extends('front-small')

@section('title')

	<title>{{ __('blog.classroomTitle') }} | Maximilian Muza</title>

@stop

@section('metaTag')

	<meta name="description" content="{{ __('blog.classroomMetaDescription') }}">
    <meta name="keywords" content="{{ __('blog.classroomMetaKeys') }}">
@stop

@section('setHeader')

	@php 

		$NavWhite = true

	@endphp

@stop

@section('content')
    <div class="content__wrapper">
	<div class="standardCard blog textCenter">
		<h2>{{ __('blog.classroomTitle') }}</h2>
		<div class="blog__largeCard makeAuto boxShadow center displayNone--blog">
			<div class="blog__category red">{{ __('blog.course') }}</div>
			<a href="/klassenraum/online-präsenz/">	
			    <img class="blog__largePicture" src="/img/ideen.jpeg" alt="erstelle erfolgreiche Online Präsenz">
			    <div class="blog__largeTextContainer">
			        <h3 class="fontSize--26 marginLeft--special">{{ __('blog.fifthCard1Headline') }}</h3>
			        <p class="marginLeft--special">{{ __('blog.fifthCard1Text') }}</p>
			        <button class="marginLeft--special">{{ __('blog.fifthCardButton') }}</button>
			    </div>
			</a>
		</div>
		<div class="blog__card makeAuto boxShadow display--blog">
			<div class="blog__category red">{{ __('blog.course') }}</div>
			<a href="/klassenraum/online-präsenz/">	
			    <img class="blog__picture" src="/img/ideen.jpeg" alt="erstelle erfolgreiche Online Präsenz">
			    <div class="blog__textContainer">
			        <h3 class="fontSize--26 marginLeft--special">{{ __('blog.fifthCard1Headline') }}</h3>
			        <p class="fontSize--15 marginLeft--special">{{ __('blog.fifthCard1Text') }}</p>
			        <button class="marginLeft--special">{{ __('blog.fifthCardButton') }}</button>
			    </div>
			</a>
		</div>
		<div class="blog__card makeAuto boxShadow">
			<div class="blog__category blue">{{ __('blog.article') }}</div>
			<a href="/klassenraum/blog-für-dein-unternehmen/">	
			    <img class="blog__picture" src="/img/blog.jpg" alt="8 Webdesign Fehler die du vermeiden solltest">
				<div class="blog__textContainer">
				    <h3 class="fontSize--26 marginLeft--special">{{ __('blog.fifthCard2Headline') }}</h3>
				    <p class="fontSize--15 marginLeft--special">{{ __('blog.fifthCard2Text') }}</p>
				    <button class="marginLeft--special">{{ __('blog.fifthCardButton') }}</button>
				</div>
			</a>
		</div>
		<div class="blog__card makeAuto boxShadow">
			<div class="blog__category blue">{{ __('blog.article') }}</div>
			<a href="/klassenraum/konkurrenz/">	
			    <img class="blog__picture" src="/img/konkurrenz.jpg" alt="von konkurrenz absetzen">
			    <div class="blog__textContainer">
			        <h3 class="fontSize--26 marginLeft--special">{{ __('blog.fifthCard3Headline') }}</h3>
			        <p class="fontSize--15 marginLeft--special">{{ __('blog.fifthCard3Text') }}</p>
			        <button class="marginLeft--special">{{ __('blog.fifthCardButton') }}</button>
			    </div>
			</a>
		</div>
		<div class="spacing"></div>
	</div>
</div>

@stop