<!DOCTYPE html>
<html lang="de">

@include('/includes/header', ['css' => 'app-landing.css'])

<body>

@include('/includes/navigationTop', ['NavWhite' => false])

<div class="content__wrapper">

	@yield('content')

</div>

@include('/includes/footer')

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
@yield('googleScript')
</body>
</html>