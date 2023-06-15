<x-app-layout>
    @section('title', 'Go Out ! Détails de la soirée')

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/nav.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/login.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/show-soiree.css') }}">
        <link rel="stylesheet" href="https://use.typekit.net/ulr6efr.css">
        <link rel="stylesheet" href="https://use.typekit.net/lbv4ght.css">

    </head>
    <!-- <div class="container-login">
        <div class="back-login">
            <img src="{{ URL::asset('images/nav-back.png') }}" alt="img back">
        </div>
    </div> -->
    <div class="login-page">
        <div class="form">
            <!-- <a href="/accueil"><img src="{{ URL::asset('images/logo-blanc.png') }}" alt="logo"></a> -->
            <h1>{{ $soiree->titre }}</h1>
            <p>Date: {{ $soiree->date }}</p>
            <p>Participant: {{ $soiree->participant }}</p>
            <p>Description: {{ $soiree->description }}</p>
            <p>Ville: {{ $soiree->ville }}</p>



            @if ($soiree->user_id !== auth()->id())
            @if ($isParticipating)
            <form action="{{ route('participations.destroy', $participation->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Se désinscrire</button>
            </form>
            @else
            <form action="{{ route('participations.store') }}" method="POST">
                @csrf
                <input type="hidden" name="soiree_id" value="{{ $soiree->id }}">
                <button type="submit">Participer</button>
            </form>
            @endif
            @elseif ($soiree->user_id === auth()->id())
            <form action="{{ route('soirees.destroy', $soiree->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
            @endif
            @if(session('success'))

            <div class="alert">
                <img src="{{ URL::asset('images/check.png') }}" alt="check">
                <h1> {{ session('success') }} </h1>

            </div>

            @endif


        </div>
    </div>

</x-app-layout>