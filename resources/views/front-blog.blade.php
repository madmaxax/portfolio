<!DOCTYPE html>
<html lang="de">

@include('/includes/header')

<body>

@include('/includes/navigationTop', ['NavWhite' => true])

<div class="content__wrapper">

	@yield('content')

</div>

@include('/includes/footer')

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>

</body>
</html>