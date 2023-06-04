<x-app-layout>
    @section('title', 'Go Out ! Erreur 404')

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/404.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/nav.css') }}">
        <link rel="stylesheet" href="https://use.typekit.net/ulr6efr.css">
    </head>


    <div class="error">
        <img src="{{ URL::asset('images/404.gif') }}" alt="error 404">
        <h1>ERREUR 404</h1>
        <h2>Tu t'es perdu ! la soirée c'est par là</h2>
        <button onclick="location.href='/';">Accueil</button>
    </div>

</x-app-layout>