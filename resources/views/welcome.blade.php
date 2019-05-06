<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta >
        <title>Laravel Live App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
       <div id="chat-app">
            <h1>Live chat app</h1>
            <chat-app></chat-app>
       </div>

       <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
