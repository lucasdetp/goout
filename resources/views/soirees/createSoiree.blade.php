<x-app-layout>
    @section('title', 'Go Out ! Crée ta soirées')

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
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/login.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/create-soiree.css') }}">
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
            <form class="login-form" method="POST" action="{{ route('soirees.store') }}">
                {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                <!-- <a href="/accueil"><img id="logo-go-out" src="{{ URL::asset('images/logo-blanc.png') }}" alt="logo"></a> -->
                <h1>Créer une soirée</h1>
                <div class="form-group{{ $errors->has('titre') ? ' has-error' : '' }}">
                    <input id="titre" type="text" class="block mt-1 w-full form-control" name="titre" value="{{ old('titre') }}" placeholder="{{ __('Titre') }}" required autofocus>
                    @if ($errors->has('titre'))
                    <span class="help-block">
                        <strong>{{ $errors->first('titre') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('ville') ? ' has-error' : '' }}">
                    <input id="ville" type="text" class="block mt-1 w-full form-control" name="ville" value="{{ old('ville') }}" placeholder="{{ __('Ville') }}" required autofocus>
                    @if ($errors->has('ville'))
                    <span class="help-block">
                        <strong>{{ $errors->first('ville') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                    <input id="date" type="datetime-local" class="block mt-1 w-full form-control" name="date" value="{{ old('date') }}" placeholder="{{ __('Date') }}" required>
                    @if ($errors->has('date'))
                    <span class="help-block">
                        <strong>{{ $errors->first('date') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('participant') ? ' has-error' : '' }}">

                    <input id="participant" type="number" class="block mt-1 w-full form-control" name="participant" value="{{ old('participant') }}" placeholder="{{ __('Nombres de participants') }}" required>
                    @if ($errors->has('participant'))
                    <span class="help-block">
                        <strong>{{ $errors->first('participant') }}</strong>
                    </span>
                    @endif
                </div>
                <div id="txtarea" class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <textarea id="description" class="block mt-1 w-full form-control" name="description" placeholder="{{ __('Description') }}" required>{{ old('description') }}</textarea>
                    @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('theme_id') ? ' has-error' : '' }}">
                    <select id="theme_id" class="block mt-1 w-full form-control" name="theme_id" required>
                        <option value="">Choisir un thème</option>
                        @foreach($themes as $theme)
                        <option value="{{ $theme->id }}" {{ old('theme_id') == $theme->id ? 'selected' : '' }}>{{ $theme->titre }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('theme_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('theme_id') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Créer
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>