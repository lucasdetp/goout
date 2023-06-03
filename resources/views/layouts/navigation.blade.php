<div class="container-nav">
    <div class="back-nav">
        <img src="images/nav-back.png" alt="">
    </div>
</div>

<nav id="navbar">
    <ul>
        <li><a href="/soirees">Soirée privée</a></li>
        <li><a href="/bon-plan">Bon plan</a></li>
        <li><a href="/"><img src="images/logo-go-out.png" alt="Logo Go Out" class="logo"></a></li>
        <li><a href="/a-propos">À propos</a></li>
        <li><a href="/contact">Contact</a></li>
        <li>
            @auth
            <x-dropdown align="right" width="45">
                <x-slot name="trigger">
                    <img src="images/profil.png" alt="Connection" class="profil" onclick="toggleDropdown()">
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
                <img src="images/profil.png" alt="Connection" class="profil">
            </a>
            @endauth
        </li>
    </ul>
</nav>