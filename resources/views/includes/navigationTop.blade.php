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
				<a href="#">&#9776; MENU</a>
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
				<a href="#">&#9776; MENU</a>
			</div>
		</div>
	</div>
@endif