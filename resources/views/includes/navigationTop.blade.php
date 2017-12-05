@if ($NavWhite == true)
<div class="navigationTop colorWhite boxShadow--light">
	<div class="navigationMenu flex">
		<div class="navigationItem displayNone">
			<a href="/">
				<img class="navigation__logo" src="/img/M.png">
			</a>
		</div>
		<div class="navigationItem sliding-middle-out displayNone">
			<a href="/">START</a>
		</div>
		<div class="navigationItem sliding-middle-out displayNone">
			<a href="/klassenraum/">KLASSENRAUM</a>
		</div>
		<div class="navigationItem sliding-middle-out displayNone">
			<a href="/leistungen/">LEISTUNGEN</a>
		</div>
		<div class="navigationItem sliding-middle-out displayNone">
			<a href="/über-mich/">ÜBER MICH</a>
		</div>
		<div class="navigationItem sliding-middle-out display">
			<a id="menu" href="#">&#9776; MENU</a>
		</div>
	</div>
</div>
@elseif ($NavWhite == false)
<div class="navigationTop--whiteColor">
	<div class="navigationMenu flex">
		<div class="navigationItem">
			<a href="/">
				<img class="navigation__logo" src="/img/M.png" alt="logo">
			</a>
		</div>
		<div class="navigationItem--whiteColor sliding-middle-out displayNone">
			<a href="/index/">START</a>
		</div>
		<div class="navigationItem--whiteColor sliding-middle-out displayNone">
			<a href="/klassenraum/">KLASSENRAUM</a>
		</div>
		<div class="navigationItem--whiteColor sliding-middle-out displayNone">
			<a href="/leistungen/">LEISTUNGEN</a>
		</div>
		<div class="navigationItem--whiteColor sliding-middle-out displayNone">
			<a href="/über-mich/">ÜBER MICH</a>
		</div>
		<div class="navigationItem--whiteColor sliding-middle-out display">
			<a id="menu--white" href="#">&#9776; MENU</a>
		</div>
	</div>
</div>
@endif
<div class="navigation__dropdown">
	<div class="flex height100">
		<ul>
			<li id="x" class="closeNav listItem">&#10005;</li>
			<li class="listItem"><a href="/">START</a></li>
			<li class="listItem"><a href="/klassenraum/">KLASSENRAUM</a></li>
			<li class="listItem"><a href="/leistungen/">LEISTUNGEN</a></li>
			<li class="listItem"><a href="/über-mich/">ÜBER MICH</a></li>
			<li class="listItem"><a href="/impressum/">IMPRESSUM</a></li>
		</ul>
	</div>
</div>
