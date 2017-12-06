<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mail test</title>
        <style>
        body {
            background-color: #34c5ed;
            width: 50%;
        }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <h1>Hallo, im Anhang findest du eine Project Anfrage von {{ $name }}</h1>
            <hr>
            <h3>Name:</h3>
            <p>{{ $name }}</p>
            <h3>Email:</h3>
            <p>{{ $mail }}</p>
            @if(isset($nachricht))
            <h3>Nachricht:</h3>
            <p>{{ $nachricht }}</p>
            @endif
            <hr>
			<p>Beste Grüße,</p>
			<p>Madmax</p>
        </div>
    </body>
</html>
