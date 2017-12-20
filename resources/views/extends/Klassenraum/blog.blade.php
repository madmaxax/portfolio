@extends('front-blog')

@section('title')

	<title>Darum sollte dein Unternehmen einen Blog führen</title>

@stop

@section('metaTag')

	<meta name="description" content="Erfahre wie ein Blog deinem Unternehmen hilft die Kundenbeziehung zu vertiefen und den Umsatz zu erhöhen.">
    <meta name="keywords" content="warum Blog, Blog, regionales Unternehmen, Kleinunternehmen">
    <meta property="og:url" content="http://maximilianmuza.de/klassenraum/konkurrenz.html" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Darum sollte dein Unternehmen einen Blog führen." />
	<meta property="og:description" content="Darum sollte dein Unternehmen einen Blog führen" />
	<meta property="og:image" content="http://maximilianmuza.de/img/blog.jpg" />

@stop

@section('setHeader')

	@php

		$nav = true;

	@endphp

@stop

@section('content')
<div class="content__wrapper">
	<div class="impressum__contentContainer">
		<img class="blogSpecific__largePicture center" src="../img/blog.jpg" alt="Konkurrenz Wettkampf">
		<div class="row">
			<h1 class="impressum__headline">3 Gründe warum dein Unternehmen einen Blog führen sollte.</h1>
			<p>Es gibt viele Diskussionen, ob regionale Unternehmen von einem Blog profitieren.</p>
			<p>Ich bin davon überzeugt, dass ein Blog eine großartige Möglichkeit ist, die Kundenbeziehung zu stärken und im besten Fall den Umsatz zu erhöhen. Lass es mir dir erklären.</p>
			<img class="blogSpecific__picture center" src="../img/blog.jpg" alt="Konkurrenz Wettkampf">
			<h2 class="boldHeadline">Finde jetzt heraus was für einen Nutzen du von einem Blog haben könntest:</h2>
			<h4 class="klassenraum__listItems">1. Erhöhe das Ranking deiner Website bei Google.</h4>
			<p>Mithilfe von Algorithmen beurteilt Google unter anderem die Qualität und den Informationsgehalt deiner Website. Je besser die Beurteilung ausfällt, desto weiter oben wird deine Website bei gewissen Suchanfragen gefunden. Der Grund liegt darin, dass Google sie für Besucher als nützlich ansieht und dementsprechend leicht ersichtlich präsentiert.</p>
			<p>Fazit: Ein Blog auf deiner Website, der einen positiven Beitrag für deinen Leser liefert, wird von Google erkannt. Da die meisten bei Google nur die ersten Suchergebnisse berücksichtigen, ist es für dich besonders wichtig in diesen zu erscheinen. Ein Blog ist eine gute Möglichkeit darin zu erscheinen.</p>
			<h4 class="klassenraum__listItems">2. Lasse deine Leser von deiner Erfahrung profitieren.</h4>
			<p>Ein Blog gibt dir die Möglichkeit dein Wissen und deine Erfahrung deinen Lesern mitzuteilen. Als Inhaber eines Fahrradladens könntest du zum Beispiel deinen Lesern und Besuchern deiner Internetseite einfache Tipps & Tricks zum Pflegen ihrer Fahrräder geben.</p>
			<p>Ja, toll. Aber wie kannst du davon profitieren?</p>
			<p>Ganz einfach:</p>
			<div class="highlight boxShadow">
				<p>Der Großteil der Leute, die deinen Blog lesen, werden dankbar für deine Ratschläge sein. Sie werden konsequenterweise dein Unternehmen mit etwas Positiven in Verbindung stellen.</p>
			</div>
			<p>Das stärkt die Kundenbeziehung und hat noch weitere Vorteile, die wir uns im folgendem Absatz ansehen werden.</p>
			<h4 class="klassenraum__listItems">3. Erhalte bessere Bewertungen und mehr Aufträge / Käufe.</h4>
			<p>Indem Leser deines Blogs dein Unternehmen mit etwas Positivem assoziieren, schaffst du es im Kopf deiner Leser dein Unternehmen von der Konkurrenz abzusetzen.</p>
			<p>Sie werden dein Unternehmen für die hilfreiche Kundenbeziehungen schätzen.</p>
			<p>Im Fall des Fahrradladens werden sie sehr erfreut über das Erspanis einer teuren Wartung sein. Und wer weiß?!</p>
			<p>.. Bei der nächsten großen Reparatur oder beim nächsten Fahrradkauf werden sie mit größerer Wahrscheinlichkeit dein Unternehmen nutzen.</p>
		</div>
	</div>
	<div class="mediaIcons__outerCard">
		<div class="mediaIcons__innerCard flex">
			<h3>Teile deine Meinung mit!</h3>
			<div class="mediaIcons__container flex">
				<a target="_blank" href="https://plus.google.com/114290443080274459125">
					<i class="icon-gplus"></i>
				</a>
				<a target="_blank" href="https://www.facebook.com/maximilianmuza/">
					<i class="icon-facebook-squared"></i>
				</a>
				<a target="_blank" href="https://www.linkedin.com/in/maximilianmuza/">
					<i class="icon-linkedin-squared"></i>
				</a>
			</div>
		</div>
	</div>
</div>
@stop

@section('googleScript')
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Course",
  "name": "Setze dich von deiner Konkurrenz ab.",
  "description": "Erfahren wie ein Blog deinem Unternehmen hilft die Kundenbeziehung zu vertiefen und den Umsatz zu erhöhen.",
  "provider": {
    "@type": "Organization",
    "name": "Maximilian Muza",
    "sameAs": "maximilianmuza.de"
  }
}
</script>
@stop