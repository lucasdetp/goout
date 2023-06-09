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
    <div class="container">
        <div class="title">
            <h1>Contactez-nous</h1>
        </div>
        <form action="" method="POST" id="contact-form">
            <div class="form-field">
                <label for="fullname">Nom</label>
                <input type="text" class="fullname" name="fullname" placeholder="Nom" required autofocus>
            </div>
            <div class="form-field">
                <label for="email">Email</label>
                <input type="email" class="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-field">
                <label for="message">Message</label>
                <textarea type="message" class="message" name="message" placeholder="Entrez votre message ici" required rows="4"></textarea>
            </div>
            <div class="form-field btn">
                <input type="submit" name="submit" class="submit" value="Envoyer">
            </div>
        </form>
        <p id="status-message"></p>
    </div>
    <script src="/javascript/contact.js"></script>
</x-app-layout>