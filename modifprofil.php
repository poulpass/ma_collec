<?php
    include 'navbar.php';
    
    include "connection/connexion_bdd.php";

    $pseudo = $_SESSION['user'];
    $requeteNom = pg_fetch_array(pg_query("SELECT user_pseudo ,user_mail FROM public.user WHERE user_pseudo = '".$pseudo."';"));
    $requeteAvatar = pg_fetch_array(pg_query("SELECT avatar_id FROM public.user WHERE user_pseudo = '".$pseudo."';"));
    $resultAvatar = pg_fetch_array(pg_query("SELECT avatar_name FROM public.avatar WHERE avatar_id = ".$requeteAvatar[0].";"));
?>
<!DOCTYPE html>

<html>

<head>
	<title>Paramètres du compte</title>
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
            <div class="card blue-grey darken-1">
                    <form class="card-content white-text" method="post" action="connection/requetteChangeUser.php">
                        <span class="card-title">Inscription<img class="white red-text userpic right" id="selectedAvatar" src="faces/svg/<?php echo "$resultAvatar[0]";?>.svg">
                        </span>
                        <input type="text" id="user_pseudo" name="user_pseudo" value="<?php echo "$requeteNom[0]";?>">
                        <label for="user_pseudo">Nom</label>
                        <input type="text" id="mail" name="mail" value="<?php echo "$requeteNom[1]";?>">
                        <label for="mail">Mail</label>
                        <br><br>
                        <div class="row">
                            <div class="col s12">
                                <select class="icons col s12" onchange="enableWager(this);" id="avatar" name="avatar">
                                    <option value="<?php echo "$requeteAvatar[0]";?>" class="center-align black-text" >Selection d'avatar</option>
                                    <option value="1" data-icon="faces/svg/bald-man-face-with-beard-and-sunglasses.svg" class="center-align black-text">Homme 1</option>
                                    <option value="2" data-icon="faces/svg/bald-man-with-beard.svg" class="center-align black-text">Homme 2</option>
                                    <option value="3" data-icon="faces/svg/bald-man-with-goatee.svg" class="center-align black-text">Homme 3</option>
                                    <option value="4" data-icon="faces/svg/boy-face.svg" class="center-align black-text">Homme 4</option>
                                    <option value="5" data-icon="faces/svg/man-face-with-beard.svg" class="center-align black-text">Homme 5</option>
                                    <option value="6" data-icon="faces/svg/man-face-with-glasses-and-goatee.svg" class="center-align black-text">Homme 6</option>
                                    <option value="7" data-icon="faces/svg/man-with-hair-crest-and-goatee.svg" class="center-align black-text">Homme 7</option>
                                    <option value="8" data-icon="faces/svg/man-face-with-headphones-sunglasses-and-beard.svg" class="center-align black-text">Homme 8</option>
                                    <option value="9" data-icon="faces/svg/man-face-with-moustache.svg" class="center-align black-text">Homme 9</option>
                                

                                    <option value="10" data-icon="faces/svg/girl-face.svg" class="center-align black-text">Femme 1</option>
                                    <option value="11" data-icon="faces/svg/girl-face-1.svg" class="center-align black-text">Femme 2</option>
                                    <option value="12" data-icon="faces/svg/girl-face-2.svg" class="center-align black-text">Femme 3</option>
                                    <option value="13" data-icon="faces/svg/girl-face-with-long-hair.svg" class="center-align black-text">Femme 4</option>
                                    <option value="14" data-icon="faces/svg/girl-face-with-ponytails.svg" class="center-align black-text">Femme 5</option>
                                    <option value="15" data-icon="faces/svg/princess-face.svg" class="center-align black-text">Femme 6</option>
                                    <option value="16" data-icon="faces/svg/punk-face.svg" class="center-align black-text">Femme 7</option>
                                    <option value="17" data-icon="faces/svg/woman-face-with-sunglasses.svg" class="center-align black-text">Femme 8</option>
                                    <option value="18" data-icon="faces/svg/woman-with-ponytail-face.svg" class="center-align black-text">Femme 9</option>
                                 
                                </select>
                            </div>
                        </div>
                    
                    
                    <div class="card-action">
                    <a href="connection.php">Annuler</a>
                    <button id="changeProfil" type="submit" href="connection/deconnexion.php" class="right">Modifier</a>

                </div>
            </div>
        </div>
    </div>

	<script src="js/librairies/jquery.js"></script>
    <script src="js/librairies/materialize.js"></script>
    <script src="js/modif_profil.js"></script>

</body>

</html>
