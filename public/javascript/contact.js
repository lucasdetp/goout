document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault();

    const fullname = document.querySelector(".fullname").value;
    const email = document.querySelector(".email").value;
    const message = document.querySelector(".message").value;

    const statusMessage = document.getElementById("status-message");

    if (fullname && email && message) {
        statusMessage.textContent = "Votre message a bien été envoyé.";
        setTimeout(function() {
            statusMessage.textContent = "";
        }, 5000);
        // Vous pouvez ajouter ici le code pour envoyer le formulaire, par exemple via une requête AJAX
    }
});