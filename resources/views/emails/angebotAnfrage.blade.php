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
            <h1>Hallo, im Anhang findest du eine Angebot Anfrage von {{ $data['name'] }}</h1>
            <hr>
            <h2>Das sind die angegebenen Daten: {{ print_r($data) }}</h2>
            <hr>
			<p>Beste Grüße,</p>
			<p>Madmax</p>
        </div>
    </body>
</html>
