@extends('front-blog')

@section('title')

	<title>Blog | Maximilian Muza</title>

@stop

@section('metaTag')

	<meta name="description" content="Dein Interesse für eine Website ist geweckt, du weißt aber noch nicht wie du sie am erfolgreichsten nutzt? Erfahre mehr von meinen Erfolgsgeheimnissen in meinem Blog..">
    <meta name="keywords" content="Erfolg mit Internetseite, Website erstellen, Homepage erstellen, Blog, Umsatz erhöhen, mehr Kunden, regionales Unternehmen" />

@stop

@section('content')

    <div class="spacing"></div>		
	@include('extends._blog')
	<div class="spacing"></div>

@stop