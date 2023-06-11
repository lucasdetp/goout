<x-app-layout>
    @section('title', 'Go Out ! A propos')

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="{{ URL::to('/css/a-propos.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/css/nav.css') }}">
        <link rel="stylesheet" href="https://use.typekit.net/ulr6efr.css">
    </head>
    <div class="container-head-propos">
        <div class="a-propos">
            <p>Go Out ! est une plateforme web et mobile innovante qui vous permet de trouver facilement des <span>soirées</span> et des <span>activités</span> qui correspondent à vos <span>interêt</span> et à vos <span>préférences</span>. Que vous cherchiez une soirée à thème, une activitée sportives, une sortie culturelle ou simplement de nouveaux amis, Go Out ! est là pour vous aider à organiser votre vie sociale !🤩</p>
        </div>
        <div class="nav-propos">
            <a href="#objectifs">Objectifs</a>
            <a href="#valeurs">Valeurs</a>
            <a href="#historiques">Historiques</a>
            <a href="#equipe">Equipe</a>
            <a href="#engagements">Engagements</a>
            <a href="#partenariats">Partenariats</a>
        </div>

    </div>
    <div class="all-propos">
        <div class="objectifs left" id="objectifs">
            <div class="title">
                <img src="{{ URL::asset('images/objectifs.png') }}" alt="picto">
                <h1>Objectifs</h1>
            </div>
            <div class="desc-propos left-desc">
                <p>Notre mission chez Go Out ! est de <span>connecter les jeunes adultes</span> passionnés de sorties et de divertissements en leur offrant un moyen simple et convivial de découvrir des événements excitants autour d'eux. Nous voulons créer une communauté dynamique où chacun peut trouver des expériences uniques qui correspondent à ses goûts.</p>
            </div>
        </div>
        <div class="valeurs right" id="valeurs">
            <div class="title">
                <h1>Valeurs</h1>
                <img src="{{ URL::asset('images/valeurs.png') }}" alt="picto">
            </div>
            <div class="desc-propos right-desc">
                <p>Chez Go Out ! Nous croyons en <span>l'inclusivité, la bienveillance et le partage</span>. Nous encourageons nos utilisateurs à découvrir de nouvelles activités, à se rencontrer et à partager des expériences enrichissantes. Nous accordons une grande importance à la sécurité de nos utilisateurs et nous nous efforçons de créer un environnement amical et sécurié pour tous.</p>
            </div>
        </div>
        <div class="historiques left" id="historiques">
            <div class="title">
                <img src="{{ URL::asset('images/historique.png') }}" alt="picto">
                <h1>Historiques</h1>
            </div>
            <div class="desc-propos left-desc">
                <p>Go Out ! est né de la passion commune de notre équipe pour les sorties et les événements. Nous avons réalisé qu'il était parfois <span>difficiles de trouver des soirées et des activités intéressantes,</span> surtout lorsque l'on est nouveau dans une ville ou que l'on cherche à diversifier ses expériences. C'est ainsi que nous avons décidé de créer Go Out ! pour faciliter la découverte et l'organisation d'événements.</p>
            </div>
        </div>
        <div class="equipe right" id="equipe">
            <div class="title">
                <h1>Équipe</h1>
                <img src="{{ URL::asset('images/equipe.png') }}" alt="picto">
            </div>
            <div class="desc-propos right-desc">
                <!-- <img src="{{ URL::asset('images/notre-equipe.png') }}" alt="notre équipe"> -->
                <p>Notre équipe de <span>passionés</span> travaille sans relâche pour prendre Go Out ! plus excitant et plus complet chaque jour. Nous sommes des amateurs de sorties et nous comprenons les besoins et les attentes de notre communauté. Nous mettons tous en oeuvre pour offrir une expérience utilisateur exceptionnelle et pour réponde aux besoin de notre communauté grandissante.</p>
            </div>
        </div>
        <div class="engagements left" id="engagements">
            <div class="title">
                <img src="{{ URL::asset('images/engagements.png') }}" alt="picto">
                <h1>Engagements</h1>
            </div>
            <div class="desc-propos left-desc">
                <p>Chez Go Out ! nous nous engageons à créer une <span>communauté active, engagée et respectueuse</span>. Nous encourageons nos utilisateurs à interagir, à se rencontrer et à partager des moments mémorables. La sécurité de nos utilisateurs est primordiale, c'est pourquoi nous avons mis en place des mesures de protection et de confidentialité pour garantir une expérience sûre et agréable.</p>
            </div>
        </div>
        <div class="partenariats right" id="partenariats">
            <div class="title">
                <h1>Parteneriats</h1>
                <img src="{{ URL::asset('images/partenariats.png') }}" alt="picto">
            </div>
            <div class="desc-propos right-desc">
                <p>Nous sommes fier de <span>collaborer avec des bars, des clubs, des restaurants et d'autres acteurs de l'industrie des sorites</span> pour offrir à nos utulisateurs des expériences spéciales et des offres exclusives. Nous cherchons constamment de nouveaux partenaires pour élargir notre gamme d'événements et offrir encore plus de possibilités à notre communauté.</p>
            </div>
        </div>
    </div>
</x-app-layout>