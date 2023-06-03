<x-app-layout>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/nav.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/soirees.css') }}">
        <link rel="stylesheet" href="https://use.typekit.net/ulr6efr.css">
        <title>Go Out ! - Accueil</title>
    </head>
    <div class="search">
        <div class="search-form">
            <form action="{{ route('soirees.search') }}" method="GET">
                <div class="form-group">
                    <input type="text" name="ville" class="form-control css-input-soirees" placeholder="Rechercher une ville">
                </div>
                <div class="form-group">
                    <label id="color" for="participant">Nombres de participants :</label>
                    <select name="participant" id="participant" class="form-control">
                        <option value="">Tous</option>
                        <option value="1">1 et 5</option>
                        <option value="2">6 et 10</option>
                        <option value="3">>10</option>
                    </select>
                </div>
            
                <button type="submit" class="btn btn-primary button2">Rechercher</button>
             
            </form>
            <div class="form-group">
                    <label id="color" for="theme">Thème :</label>
                        @foreach($themes as $theme)
                        <a href="#{{ $theme->titre }}"><h1>{{ $theme->titre }}</h1></a>
                        @endforeach
                </div>
        </div>
    </div>
</div>


@foreach($themes as $theme)
<div id="{{ $theme->titre }}">
    <p>{{ $theme->titre }}</p>
    
    @php
        $soireesByTheme = $soirees->where('theme_id', $theme->id);
    @endphp
   
    @if ($soireesByTheme->count() > 0)
        @foreach ($soireesByTheme as $soiree)
            <img src="{{ $soiree->user->profile_photo_path }}" alt="">
            <p>{{ $soiree->titre }}</p>
            <p>{{ $soiree->description }}</p>
            <p>Nombres de participants: {{ $soiree->participant }}</p>
            <p>Thème: {{ $soiree->theme->titre }}</p>
            <a class="button-slide" href="{{ route('soirees.show', $soiree->id) }}">Rejoindre</a>
            <ul>
                @if ($soiree->participations && $soiree->participations->count() > 0)
                    <ul class="horizontal-list">
                        @foreach ($soiree->participations as $participation)
                            <li><img class="avatar-test" src="{{ $participation->user->profile_photo_path }}" alt=""></li>
                        @endforeach
                    </ul>
                @else
                    <p>Aucun participant pour le moment.</p>
                @endif
            </ul>
            <p>Le {{ $soiree->date }} à {{ $soiree->ville }}</p>
        @endforeach
    @else
        <p>Aucune soirée pour l'instant.</p>
    @endif
    </div>
@endforeach

   

</x-app-layout>