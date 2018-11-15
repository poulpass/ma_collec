


<!DOCTYPE html>

<html>

<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col s0 m3"></div>
            <div class="col s12 m6">
                <form class="card blue-grey darken-1" method="post" action="connection/connexion.php">
                    <div class="card-content white-text">
                        <span class="card-title">Connection</span>
                        <input type="text" id="username" name="username" class="validate">
                        <label for="username">Nom</label>
                        <input type="text" id="password" name="password" type="password" class="validate">
                        <label for="password">Mot de passe</label>
                    </div>
                    <div class="card-action">
                        <a href="inscription.php">S'inscrire</a>
                        <button type="submit">Se connecter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
	<script src="js/librairies/jquery.js"></script>
	<script src="js/librairies/materialize.js"></script>
</body>

</html>