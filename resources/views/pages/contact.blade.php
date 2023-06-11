<x-app-layout>
    @section('title', 'Go Out ! Contact')

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="{{ URL::to('/css/contact.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/css/nav.css') }}">
        <link rel="stylesheet" href="https://use.typekit.net/ulr6efr.css">
    </head>
    <div class="container-faq">
        <div class="desc-faq">
            <p>Salut à toi, membre de notre super communauté !</p>
            <p>On est là pour t'aider du mieux qu'on peut ! Avant de nous contacter directement, on te propose de jeter un oeil à notre Foire Aux Questions (FAQ) ci-dessous.</p>
            <p>C'est un peu comme un recueil de réponses aux questions les plus courantes posées par nos utilisateurs géniaux, comme toi ! Tu vas y trouver plein d'infos utiles sur notre plateforme, les fonctionnalités disponibles, et même des astuces pour résoudre des problèmes fréquents.</p>
            <p>Qui sait, tu pourrais trouver la réponse à ta question en un clin d'oeil, sans attendre notre réponse. On te fait confiance pour être un détective de l'information !</p>
            <p>Cependant, si tu ne trouves pas la réponses que tu cherches dans la FAQ, ne t'inquiète pas ! On est là pour toi. Utilise le formulaire de contact ci-joint pour nous envoyer un message, et notre équipe se fera un plaisir de te fournir une assistance personnalisée aussi vite que possible. Tu fais partie de notre famille, et ta satisfaction est notre priorité absolue.</p>
        </div>
        <a href="#">Foire aux questions</a>
    </div>
    <div class="all-card">
        <div class="card" id="faq-1" onclick="toggleDescription('faq-1')">
            <h1>Qu'est-ce que "Go Out !" ?</h1>
            <p class="description">"Go Out !" est une plateforme web et web mobile qui vous permet de trouver et de créer des soirées et des activités selon vos centres d'intérêt. C'est un moyen pratique de découvrir des événements et de rencontrer de nouvelles personnes.</p>
        </div>
        <div class="card" id="faq-2" onclick="toggleDescription('faq-2')">
            <h1>Comment puis-je m'inscrire sur "Go Out !" ?</h1>
            <p class="description">En construction ...</p>
        </div>
        <div class="card" id="faq-3" onclick="toggleDescription('faq-3')">
            <h1>Comment puis-je trouver des événements sur "Go Out !" ?</h1>
            <p class="description">En construction ...</p>
        </div>
        <div class="card" id="faq-4" onclick="toggleDescription('faq-4')">
            <h1>Puis-je créer mes propres événements sur "Go Out !" ?</h1>
            <p class="description">En construction ...</p>
        </div>
        <div class="card" id="faq-5" onclick="toggleDescription('faq-5')">
            <h1>Comment puis-je ajouter des amis sur "Go Out !" ?</h1>
            <p class="description">En construction ...</p>
        </div>
        <div class="card" id="faq-6" onclick="toggleDescription('faq-6')">
            <h1>Comment puis-je garantir ma sécurité lors des événements sur "Go Out !" ?</h1>
            <p class="description">En construction ...</p>
        </div>
        <div class="card" id="faq-7" onclick="toggleDescription('faq-7')">
            <h1>Comment puis-je signaler un problème sur "Go Out !" ?</h1>
            <p class="description">En construction ...</p>
        </div>
        <div class="card" id="faq-8" onclick="toggleDescription('faq-8')">
            <h1>"Go Out !" est-il gratuit à utiliser ?</h1>
            <p class="description">En construction ...</p>
        </div>
        <div class="card" id="faq-9" onclick="toggleDescription('faq-9')">
            <h1>Comment obtenir des bons plans et des remises exclusives sur "Go Out !" ?</h1>
            <p class="description">En construction ...</p>
        </div>
        <div class="card" id="faq-10" onclick="toggleDescription('faq-10')">
            <h1>Comment puis-je contacter le support client de "Go out !" ?</h1>
            <p class="description">En construction ...</p>
        </div>
    </div>
    <div class="container">
        <h1>Formulaire de contact</h1>
        <form action="" method="POST" id="contact-form">
            <div class="form-field">
                <div class="row">
                    <div class="e">
                        <label for="fullname">Nom</label>

                        <input type="text" class="fullname" name="fullname" required autofocus>
                    </div>
                    <div class="e">
                        <label for="name">Prénom</label>
                        <input type="text" class="name" name="name" required autofocus>

                    </div>
                </div>

            </div>
            <div class="form-field">
                <label for="email">Email</label>
                <input type="email" class="email" name="email" required>
            </div>
            <div class="form-field">
                <label for="Sujet">Sujet</label>
                <input type="text" class="Sujet" name="Sujet" required autofocus>
            </div>
            <div class="form-field">
                <label for="message">Message</label>
                <textarea type="message" class="message" name="message" required rows="4"></textarea>
            </div>
            <div class="form-field btn">
                <input type="submit" name="submit" class="submit" value="Envoyer">
            </div>
        </form>
        <p id="status-message"></p>
    </div>
    <script src="/javascript/faq.js"></script>
    <script src="/javascript/contact.js"></script>
</x-app-layout>