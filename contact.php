<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/contact.css">
    <title>Contact</title>
</head>

<body>
    <div class="contact-container">
        <form class="formulaire">
            <h1><span>#</span>CONTACTME</h1>
            <div class="labelAndInput-container">
                <label for="mail">E-mail</label>
                <input type="email" id="mail" name="user_mail" placeholder="Ex : matheo.portfolio@mail.fr">
            </div>
            <div class="labelAndInput-container">
                <label for="msg">Message</label>
                <textarea id="msg" name="user_message" placeholder="Entrez votre message ici !"></textarea>
            </div>

        </form>
        <div class="sendBtn-container">
            <button class="sendButton" id="sendBtn">Envoyer !</button>
        </div>
    </div>
</body>

</html>