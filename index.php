<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte de voeux !</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script defer src="assets/js/app.js"></script>
</head>

<body>
    <div class="container">
        <form>
            <div class="form-group">
                <label for="dest-name">Le nom du destinataire :</label>
                <input type="text" id="dest-name" name="dest-name">
            </div>
            <div class="form-group">
                <label for="dest-mail">Le mail du destinataire :</label>
                <input type="text" id="dest-mail" name="dest-mail">
            </div>
            <div class="form-group">
                <label for="name">Votre nom :</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="mail">Votre mail :</label>
                <input type="text" id="mail" name="mail">
            </div>
            <button>Envoyer</button>
            <div id="message"></div>
        </form>
    </div>
</body>

</html>