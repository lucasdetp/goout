<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/login.css') }}">
    <link rel="stylesheet" href="https://use.typekit.net/ulr6efr.css">
    <link rel="stylesheet" href="https://use.typekit.net/lbv4ght.css">
    <link rel="stylesheet" href="nav.css">

    <title>Go Out ! Connection</title>
</head>


<div class="container-login">
    <div class="back-login">
        <img src="{{ URL::asset('images/nav-back.png') }}" alt="">

    </div>

</div>

<div class="login-page">
    <div class="form">
        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf

            <a href="/accueil"><img src="{{ URL::asset('images/logo-blanc.png') }}" alt="logo"></a>
            <h1>S'identifier</h1>
            <!-- <x-input-label for="email" :value="__('Email')" /> -->
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="{{ __('Email') }}" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <div class="mt-4">
                <!-- <x-input-label for="password" :value="__('Password')" /> -->

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="{{ __('Mot de passe') }}" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                <div class="block mt-4">
                    <label id="remember_login" for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span id="tst" class="ml-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
                    </label>
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-3">
                            {{ __("S'identifier") }}
                        </x-primary-button>

                        @if (Route::has('password.request'))
                        <a id="mdp" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Mot de passe oublié ?') }}
                        </a>
                        @endif
                    </div>
                </div>
                <a id="inscr" href="/register">Créer un compte</a>
        </form>
    </div>
</div>
<!-- ICON SCRIPT -->
<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace();
</script>
<script src="js/password.js"></script>