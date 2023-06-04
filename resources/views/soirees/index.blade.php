<x-app-layout>
    @section('title', 'Go Out ! Toutes les soirées')

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/nav.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/soirees.css') }}">
        <link rel="stylesheet" href="https://use.typekit.net/ulr6efr.css">
    </head>
    <div class="search">
        <div class="search-form">
            <form id="form-search" action="{{ route('soirees.search') }}" method="GET">
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
                <a href="#{{ $theme->titre }}">
                    <h1 id="title-theme">{{ $theme->titre }}</h1>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    </div>


    @foreach ($themes as $key => $theme)
    @php
    $positionClass = ($key % 2 == 0) ? 'left' : 'right';
    $themeCardClass = "theme-card " . $positionClass;
    @endphp

    <div class="theme-container {{ $positionClass }} wrapper" id="{{ $theme->titre }}">
        <div class="{{ $themeCardClass }}">
            <h1>{{ $theme->titre }}</h1>
        </div>

        <div class="soirees-container center-slider">
            @php
            $soireesByTheme = $soirees->where('theme_id', $theme->id);
            @endphp

            @if ($soireesByTheme->count() > 0)
            @foreach ($soireesByTheme as $soiree)
            <div class="soiree slide">
                <div class="avatar left-image">
                    <img src="{{ $soiree->user->profile_photo_path }}" alt="">
                </div>
                <div class="right-content">
                    <h2>{{ $soiree->titre }}</h2>
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
                    <div class="date">
                        <p>Le {{ $soiree->date }} à {{ $soiree->ville }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <h1>Aucune soirée pour l'instant.</h1>
            @endif
        </div>
    </div>
    @endforeach

    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.4.1.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="/javascript/carrousel-soirees.js"></script>
</x-app-layout>