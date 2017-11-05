@if ($NavWhite == true)
	<div class="navigationTop colorWhite boxShadow">
		<div class="navigationMenu flex">
			<div class="navigationItem">
				<a href="#">
					<img class="navigation__logo" src="/img/Mm.png">
				</a>
			</div>
			<div class="navigationItem sliding-middle-out">
				<a href="/prozess">VORGEHEN</a>
			</div>
			<div class="navigationItem sliding-middle-out">
				<a href="/leistungen">LEISTUNGEN</a>
			</div>
			<div class="navigationItem sliding-middle-out">
				<a href="/blog">BLOG</a>
			</div>
			<div class="navigationItem sliding-middle-out">
				<a href="/kontakt">KONTAKT</a>
			</div>
		</div>
	</div>
@elseif ($NavWhite == false)
	<div class="navigationTop--whiteColor">
		<div class="navigationMenu flex">
			<div class="navigationItem">
				<a href="#">
					<img class="navigation__logo" src="/img/Ms.png">
				</a>
			</div>
			<div class="navigationItem--whiteColor sliding-middle-out">
				<a href="/prozess">VORGEHEN</a>
			</div>
			<div class="navigationItem--whiteColor sliding-middle-out">
				<a href="/leistungen">LEISTUNGEN</a>
			</div>
			<div class="navigationItem--whiteColor sliding-middle-out">
				<a href="/blog">BLOG</a>
			</div>
			<div class="navigationItem--whiteColor sliding-middle-out">
				<a href="/kontakt">KONTAKT</a>
			</div>
		</div>
	</div>
@endif