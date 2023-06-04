<x-app-layout>
    @section('title', 'Go Out ! Mes soirées')

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/nav.css') }}">

        <link rel="stylesheet" href="https://use.typekit.net/ulr6efr.css">
        <title>Go Out ! - Accueil</title>
    </head>
    <h1>Mes Soirées</h1>

    <ul>
        @foreach ($soireesCrees as $soiree)
        <h2>{{ $soiree->titre }}</h2>
        <p>Date: {{ $soiree->date }}</p>
        <p>Participant: {{ $soiree->participant }}</p>
        <p>Description: {{ $soiree->description }}</p>
        <p>Ville: {{ $soiree->ville }}</p>
        <p>Thème: {{ $soiree->theme->titre }}</p>
        <p>Participants:</p>
        <ul>
            @foreach ($soiree->participations as $participation)
            <li>{{ $participation->user->name }}</li>
            @endforeach
        </ul>
        <a href="{{ route('soirees.show', $soiree->id) }}">Voir les détails</a>
        <br> <br>
        @endforeach
    </ul>


    <ul>
        @foreach ($soireesParticipees as $participation)
        <h2>{{ $participation->soiree->titre }}</h2>
        <p>Date: {{ $participation->soiree->date }}</p>
        <p>Participant: {{ $participation->soiree->participant }}</p>
        <p>Description: {{ $participation->soiree->description }}</p>
        <p>Ville: {{ $participation->soiree->ville }}</p>
        <p>Thème: {{ $participation->soiree->theme->titre }}</p>
        <p>Participants:</p>
        <ul>
            @foreach ($participation->soiree->participations as $participationn)
            <li>{{ $participationn->user->name }}</li>
            @endforeach
        </ul>
        <a href="{{ route('soirees.show', $participation->soiree->id) }}">Voir les détails</a>
        <br> <br>
        @endforeach
    </ul>

</x-app-layout>
