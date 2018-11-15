<!DOCTYPE html>

<html>

<head>
	<title>Ma Collection</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<?php
	include 'navbar.php';
?>
<body>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <a href="#modaladd" class="modal-trigger btn-large deep-purple"><i class="material-icons right">person_add</i>Ajouter</a>
                <?php 
                $pseudo = $_SESSION['user'];
                $requeteIdUser = pg_fetch_array(pg_query("SELECT user_id FROM public.user WHERE user_pseudo = '".$pseudo."';"));
                $requeteCheckNew = pg_fetch_array(pg_query("SELECT friend_id FROM public.ami WHERE fuser_id = '".$requeteIdUser[0]."' AND friend_ok = FALSE;"));
                if ($requeteCheckNew != null){
                    echo '<a href="#modalnew" class="modal-trigger btn-large blue pulse"><i class="material-icons right">record_voice_over</i>Demande d\'ami</a>';

                }
                ?>
            </div>
            

        </div>
    </div>

    <div class="container">

 
        <ul class="collection">

            <?php include 'allfriend.php'; ?>

        </ul>
        
    </div>

    <form id="modaladd" class="modal">
        <div class="modal-content">
            <h4>Ajouter un ami</h4>
            <p>Entrez l'adresse mail de votre ami pour lui demander l'autorisation de voir sa colléction</p>
            <div class="input-field">
                    <input id="mailami" type="text" name="mailami" class="validate">
                    <label for="icon_prefix">Mail</label>
                </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Annuler</a>
            <a id="valideNewUser" href="#!" type="submit" class="modal-close waves-effect waves-green btn-flat">Ajouter</a>
        </div>
    </form>

    <div id="modalnew" class="modal">
        <div class="modal-content">
            <h4>Demandes d'amis</h4>
            <ul class="collection">
                <?php include 'newfriend.php'; ?>
            </ul>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fermer</a>
        </div>
    </div>






	<script src="js/librairies/jquery.js"></script>
    <script src="js/librairies/materialize.js"></script>
    <script src="js/material.js"></script>
    <script src="js/ajoutAmi.js"></script>

    
</body>

</html>