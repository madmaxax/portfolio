@if ($NavWhite == true)
	<div class="navigationTop colorWhite boxShadow--light">
		<div class="navigationMenu flex">
			<div class="navigationItem displayNone">
				<a href="/">
					<img class="navigation__logo" src="/img/M.png">
				</a>
			</div>
			<div class="navigationItem sliding-middle-out displayNone">
				<a href="/prozess">VORGEHEN</a>
			</div>
			<div class="navigationItem sliding-middle-out displayNone">
				<a href="/leistungen">LEISTUNGEN</a>
			</div>
			<div class="navigationItem sliding-middle-out displayNone">
				<a href="/blog">BLOG</a>
			</div>
			<div class="navigationItem sliding-middle-out displayNone">
				<a href="/kontakt">KONTAKT</a>
			</div>
			<div class="navigationItem sliding-middle-out display">
				<a id="menu" href="#">&#9776; MENU</a>
			</div>
		</div>
	</div>
@elseif ($NavWhite == false)
	<div class="navigationTop--whiteColor">
		<div class="navigationMenu flex">
			<div class="navigationItem displayNone">
				<a href="/">
					<img class="navigation__logo" src="/img/Ms.png">
				</a>
			</div>
			<div class="navigationItem--whiteColor sliding-middle-out displayNone">
				<a href="/prozess">VORGEHEN</a>
			</div>
			<div class="navigationItem--whiteColor sliding-middle-out displayNone">
				<a href="/leistungen">LEISTUNGEN</a>
			</div>
			<div class="navigationItem--whiteColor sliding-middle-out displayNone">
				<a href="/blog">BLOG</a>
			</div>
			<div class="navigationItem--whiteColor sliding-middle-out displayNone">
				<a href="/kontakt">KONTAKT</a>
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
				<li id="x" class="listItem">&#10005;</li>
				<li class="listItem"><a href="/prozess">VORGEHEN</a></li>
				<li class="listItem"><a href="/leistungen">LEISTUNGEN</a></li>
				<li class="listItem"><a href="/blog">BLOG</a></li>
				<li class="listItem"><a href="/kontakt">KONTAKT</a></li>
			</ul>
		</div>
	</div>
