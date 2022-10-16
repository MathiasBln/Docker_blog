<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/css/uikit.min.css" />
    <title>Login</title>
</head>
<body>
    <h1>Blog docker</h1>

    <form action="relation/connexion.php" method="post">
        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: user"></span>
                <input class="uk-input" type="text" name="username" placeholder="Pseudo" required="required" autocomplete="off">
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                <input class="uk-input" type="password" name="password" placeholder="Mot de passe" required="required" autocomplete="off">
            </div>
        </div>
        <div>
            <button type="submit" class="uk-button uk-button-primary">Connexion</button>
        </div>  
        <p><a href="inscription.php">Inscription</a></p>
    </form>


<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit-icons.min.js"></script>

</body>
</html>