<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/css/uikit.min.css" />

            <title>Inscription</title>
        </head>
        <body>
        <div>
            <form action="relation/traitement.php" method="post">
                <h2>Inscription</h2>       
                <div class="uk-margin">
                    <input class="uk-input uk-form-width-medium" type="text" type="text" name="username" placeholder="Pseudo" required="required" autocomplete="off">
                </div>
                <div class="uk-margin">
                    <input class="uk-input uk-form-width-medium" type="text" type="password" name="password" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="uk-margin">
                    <button type="submit" class="uk-button uk-button-primary">Inscription</button>
                </div>  
                <p><a href="index.php">Retour à l'accueil</a></p> 
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit-icons.min.js"></script>

        </body>
</html>