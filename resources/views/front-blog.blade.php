<!DOCTYPE html>
<html lang="de">

@include('/includes/header', ['css' => 'app-blog.css'])

<body>

@include('/includes/navigationTop', ['NavWhite' => $nav])

<div class="content__wrapper">

	@yield('content')

</div>

@include('/includes/footer')

<script type="text/javascript" src="{{ mix('js/app-modul.js') }}"></script>
@yield('googleScript')
</body>
</html>