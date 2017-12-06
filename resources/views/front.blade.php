<!DOCTYPE html>
<html lang="de">

@include('/includes/header', ['css' => 'app.css'])

<body>
<div class="content__wrapper">

	@yield('content')

</div>
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>