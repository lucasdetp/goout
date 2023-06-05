<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/register.css') }}">
    <link rel="stylesheet" href="https://use.typekit.net/ulr6efr.css">
    <link rel="stylesheet" href="https://use.typekit.net/lbv4ght.css">
    <link rel="stylesheet" href="nav.css">

    <title>Go Out ! Inscription</title>
</head>


<div class="container-login">
    <div class="back-login">
        <img src="{{ URL::asset('images/nav-back.png') }}" alt="img back">

    </div>

</div>

<div class="login-page">
    <div class="form">
        <form enctype="multipart/form-data" class="login-form" method="POST" action="{{ route('register') }}">
            @csrf
            <a href="/"><img src="{{ URL::asset('images/logo-blanc.png') }}" alt="logo"></a>
            <h1>Inscription</h1>
            <div class="input">
                <!-- Name -->
                <div>
                    <!-- <x-input-label for="name" :value="__('Nom')" /> -->
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="{{ __('Nom') }}" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div>
                    <!-- <x-input-label for="lastname" :value="__('Prénom')" /> -->
                    <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" placeholder="{{ __('Prénom') }}" />
                    <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                </div>
            </div>
            <div class="input">
                <div>
                    <!-- <x-input-label for="birthday" :value="__('Date de naissance')" /> -->
                    <x-text-input id="birthday" class="block mt-1 w-full" type="date" name="birthday" :value="old('birthday')" required autofocus autocomplete="birthday" placeholder="{{ __('Date de naissance') }}" />
                    <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
                </div>
                <div>
                    <!-- <x-input-label for="phone" :value="__('Téléphone')" /> -->
                    <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required autofocus autocomplete="phone" placeholder="{{ __('Téléphone') }}" />
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>
            </div>
            <div class="input">
                <div>
                    <!-- <x-input-label for="cpostal" :value="__('Code Postale')" /> -->
                    <x-text-input id="cpostal" class="block mt-1 w-full" type="text" inputmode="numeric" pattern="^(?(^00000(|-0000))|(\d{5}(|-\d{4})))$" name="cpostal" :value="old('cpostal')" required autofocus autocomplete="cpostal" placeholder="{{ __('Code postale') }}" />
                    <x-input-error :messages="$errors->get('cpostal')" class="mt-2" />
                </div>
                <div>
                    <!-- <x-input-label for="ville" :value="__('Ville')" /> -->
                    <x-text-input id="ville" class="block mt-1 w-full" type="text" name="ville" :value="old('ville')" required autofocus autocomplete="ville" placeholder="{{ __('Ville') }}" />
                    <x-input-error :messages="$errors->get('ville')" class="mt-2" />
                </div>
            </div>
            <div class="input">
                <div>
                    <!-- <x-input-label for="adresse" :value="__('Adresse')" /> -->
                    <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autofocus autocomplete="adresse" placeholder="{{ __('Adresse') }}" />
                    <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
                </div>
                <!-- Email Address -->
                <div class="mt-4">
                    <!-- <x-input-label for="email" :value="__('Email')" /> -->
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="{{ __('Email') }}" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
            </div>
            <div class="input">
                <!-- Password -->
                <div class="mt-4">
                    <!-- <x-input-label for="password" :value="__('Mot de passe')" /> -->

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="{{ __('Mot de passe') }}" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <!-- Confirm Password -->
                <div class="mt-4">
                    <!-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> -->

                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirmer le mot de passe') }}" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
            </div>
            <div class="input flex">
                <div class="mt-6">
                    <h1><x-input-label for="profile_photo" :value="__('Ajouter une photo de profil')" /></h1>
                    <input id="profile_photo" name="profile_photo" type="file" class="mt-1 block w-full">
                    <x-input-error class="mt-2" :messages="$errors->get('profile_photo')" />
                </div>
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4">
                    {{ __("S'inscrire") }}
                </x-primary-button>
            </div>
            <p class="message">J'ai déjà un compte ! <a href="/login">Se connecter</a></p>

        </form>
    </div>
</div>
<!-- ICON SCRIPT -->
<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace();
</script>
<script src="js/password.js"></script>