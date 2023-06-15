<div class="container-nav">
    <div class="back-nav">
        <img src="{{ URL::asset('images/nav-back.png') }}" alt="">

    </div>
</div>

<nav id="navbar">
    <ul>
        <li><a href="/soirees">Soirée privée</a></li>
        <li><a href="/bon-plan">Bon plan</a></li>
        <li><a href="/"><img src="{{ URL::asset('images/logo-go-out.png') }}" alt="Logo Go Out" class="logo"></a></li>
        <li><a href="/a-propos">À propos</a></li>
        <li><a href="/contact">Contact</a></li>
        <li>
            @auth
            <x-dropdown align="right" width="45">
                <x-slot name="trigger">
                    <img src="{{ URL::asset('images/profil.png') }}" alt="Connection" class="profil" onclick="toggleDropdown()">
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Mon profil') }}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('soirees.user')">
                        {{ __('Mes soirées') }}
                    </x-dropdown-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Déconnexion') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
            @else
            <a href="{{ route('login') }}">
                <img src="{{ URL::asset('images/profil.png') }}" alt="Connection" class="profil">
            </a>
            @endauth
        </li>
    </ul>
</nav>
<nav id="navbar-mobile">
    <ul>
        <li><a href="/"><img src="{{ URL::asset('images/logo-go-out.png') }}" alt="Logo Go Out" class="logo"></a></li>
        <li>
            @auth
            <x-dropdown align="right" width="45">
                <x-slot name="trigger">
                    <img src="{{ URL::asset('images/profil.png') }}" alt="Connection" class="profil" onclick="toggleDropdown()">
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Mon profil') }}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('soirees.user')">
                        {{ __('Mes soirées') }}
                    </x-dropdown-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Déconnexion') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
            @else
            <a href="{{ route('login') }}">
                <img src="{{ URL::asset('images/profil.png') }}" alt="Connection" class="profil">
            </a>
            @endauth
        </li>
    </ul>
    <button id="menu-toggle" class="menu-toggle">
        <span class="menu-text">Menu</span>
        <span class="menu-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M0 0h24v24H0z" fill="none" />
                <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" />
            </svg>
        </span>
    </button>

    <div class="nav-mobile menu-mobile">

        <ul>
            <li><a href="/a-propos">A propos</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/bon-plan">Bon plan</a></li>
            <li><a href="/soirees">Les soirées</a></li>
            <li><a href="/">Accueil</a></li>
        </ul>
        <button id="menu-close" class="menu-close">
            <span class="close-icon">Menu X</span>
        </button>
    </div>
</nav>