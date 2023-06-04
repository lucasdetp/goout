<x-app-layout>
    @section('title', 'Go Out ! Accueil')

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/css/main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/css/nav.css') }}">
        <link rel="stylesheet" href="https://use.typekit.net/ulr6efr.css">
    </head>

    <!-- recherche -->
    <div class="search">
        <div class="search-form">
            <form action="{{ route('soirees.search') }}" method="GET">
                <div class="form-group">
                    <input type="text" name="ville" class="form-control css-input" placeholder="Rechercher une ville">
                    <button type="submit" class="btn btn-primary button"><img src="images/search.png" alt=""><span class="rechercher">Rechercher</span></button>
                </div>
            </form>
        </div>
        <div class="search-p">
            <p id="color">Tu n'as pas trouvé de soirée ?</p>
            <a class="button2" href="{{ route('soirees.create') }}">Crée une soirée</a>
        </div>
    </div>
    <div class="container-4">
        <div class="card">

            <div class="card-body">
                <h2>Les meilleurs soirée <span>prêt de chez toi</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="button" href="{{ route('soirees.index') }}">Toutes nos soirées</a>
            </div>
        </div>
        <div class="card-header">
            <img src="{{ URL::asset('images/illustration.png') }}" alt="illustration">
        </div>
    </div>

    <!-- soirées exclusives -->
    <div class="container-3">
        <h1>
            <img src="{{ URL::asset('images/icon.png') }}" alt="logo" class="logo">
            Soirées exclusives !
        </h1>
    </div>

    <div class="wrapper">
        <div class="center-slider">
            @foreach ($soirees as $soiree)

            <div class="slide">
                <div class="avatar left-image">
                    <img src="{{ $soiree->user->profile_photo_path }}" alt="avatar">
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

    <!-- offre premium -->
    <div class="container-2">
        <div class="box">
            <img src="{{ URL::asset('images/back2.png') }}" alt="img back">
            <h1 id="premium-h1">Ne manquez plus aucun événement !</h1>
            <img id="premium" src="images/premium.png" alt="">
            <p id="premium-p">Accédez aux meilleures soirées de votre ville, booster votre visibilité, profitez <span>d'offres exclusives</span> avec nos <span>BON PLAN, nos partenariats</span> et bien plus encore ! </p>
        </div>
        <div class="btn-premium">
            <img src="{{ URL::asset('images/btn_gauche.png') }}" alt="arrow">
            <button>Essayez maintenant !</button>
            <img src="{{ URL::asset('images/btn_droit.png') }}" alt="arrow">
        </div>
    </div>
    <!-- avis -->
    <div class="avis-container">
        <h1>Vous en parlez mieux que nous</h1>
        <img src="{{ URL::asset('images/coeur2.png') }}" alt="coeur">
        <img id="coeur1" src="images/coeur1.png" alt="coeur">
    </div>
    <div class="container-avis">
        <div id="slider-avis-mobile" class="avis-slider">
            <div class="avis">
                <img src="{{ URL::asset('images/1.png') }}" alt="avatar">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat justo vitae ligula tincidunt, at consequat leo blandit.</p>
            </div>
            <div class="avis">
                <img src="{{ URL::asset('images/2.png') }}" alt="avatar">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat justo vitae ligula tincidunt, at consequat leo blandit.</p>
            </div>
            <div class="avis">
                <img src="{{ URL::asset('images/3.png') }}" alt="avatar">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat justo vitae ligula tincidunt, at consequat leo blandit.</p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.4.1.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="/javascript/carrousel.js"></script>

</x-app-layout>