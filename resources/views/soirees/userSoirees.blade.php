<x-app-layout>
    @section('title', 'Go Out ! Mes soirées')

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/userSoirees.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/nav.css') }}">

        <link rel="stylesheet" href="https://use.typekit.net/ulr6efr.css">
        <title>Go Out ! - Accueil</title>
    </head>
    <h1>Mes Soirées</h1>
    <div class="wrapper">
        <div class="center-slider">
            @forelse ($soireesCrees as $soiree)
            <div class="slide">
                <div class="avatar left-image">
                    <img src="{{ $soiree->user->profile_photo_path }}" alt="avatar">
                </div>
                <div class="right-content">
                    <h2>{{ $soiree->titre }}</h2>
                    @if (strlen($soiree->description) > 100)
                    <p id="desc-soirees">{{ substr($soiree->description, 0, 100) . '...' }}</p>
                    @else
                    <p id="desc-soirees">{{ $soiree->description }}</p>
                    @endif
                    <p>Participant: {{ $soiree->participant }}</p>
                    <p>Thème: {{ $soiree->theme->titre }}</p>
                    <a class="button-slide" href="{{ route('soirees.show', $soiree->id) }}">Voir</a>
                    <ul>
                        @if ($soiree->participations && $soiree->participations->count() > 0)
                        <ul class="horizontal-list">
                            @foreach ($soiree->participations as $participation)
                            <!-- <li>{{ $participation->user->name }}</li> -->
                            <li><img class="avatar-test" src="{{$participation->user->profile_photo_path}}" alt=""></li>



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
        </div>
    </div>
    <h1>Mes participations</h1>
    <div class="wrapper">
        <div class="center-slider">
            @foreach ($soireesParticipees as $participation)
            <div class="slide">
                <div class="avatar left-image">
                    <img src="{{ $soiree->user->profile_photo_path }}" alt="avatar">
                </div>
                <div class="right-content">
                    <h2>{{ $participation->soiree->titre }}</h2>

                    <p>Participant: {{ $participation->soiree->participant }}</p>
                    @if (strlen($participation->soiree->description) > 100)
                    <p>{{ substr($participation->soiree->description, 0, 100) . '...' }}</p>
                    @else
                    <p>{{ $participation->soiree->description }}</p>
                    @endif

                    <p>Thème: {{ $participation->soiree->theme->titre }}</p>
                    <a class="button-slide" href="{{ route('soirees.show', $participation->soiree->id) }}">Voir</a>
                    <ul>
                        @if ($soiree->participations && $soiree->participations->count() > 0)
                        <ul class="horizontal-list">
                            @foreach ($participation->soiree->participations as $participationn)
                            <!-- <li>{{ $participation->user->name }}</li> -->
                            <li><img class="avatar-test" src="{{$participation->user->profile_photo_path}}" alt=""></li>


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
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.4.1.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="/javascript/carrousel.js"></script>
</x-app-layout>