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
            <div class="col l4 s12">
                <a href="#modaladd" class="modal-trigger waves-effect waves-light btn-large deep-purple topdown"><i class="material-icons right">add</i>Ajouter</a>
            </div>
            <div class="col l6 s8">
                <div class="input-field">
                    <i class="material-icons prefix">search</i>
                    <input id="loupe" type="text" class="validate">
                    <label for="loupe">Chercher</label>
                </div>
  
            </div>
            <div class="col l1 s2">
                <a id="alpha" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">sort_by_alpha</i></a>
            </div>
            <div class="col l1 s2">
                <a id="date" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">event</i></a>
            </div>


        </div>
    </div>

    <div class="container">

 
        <ul class="collection" id="affichage_book">
 

        </ul>
        
    </div>

    <div id="modaladd" class="modal">
        <form class="modal-content"  method="post">
            <h4>Ajouter à la collec</h4>
            <input type="text" id="titre" value="" name="titre">
            <label for="titre">Titre</label>
            <input type="number" id="numero" value="" name="tome">
            <label for="numero">Numero</label>
            <input type="text" id="autor" value="" name="autor">
            <label for="autor">Auteur</label>
                <p>
                    <label>
                        <input name="bd" id="bd" type="radio" checked='checked' value="t"/>
                        <span>BD</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="bd" type="radio" value="f"/>
                        <span>Livre</span>
                    </label>
                </p>
                
            <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Annuler</a>
            <button id="ajoutlivre" class="waves-effect waves-green btn-flat" >Ajouter</button>
        </div>
        </form>
  
    </div>

    <div id="modaledit" class="modal">
        <div class="modal-content">
            <h4>Modifier</h4>
            <input type="text" id="titre" value="Title">
            <label for="titre">Titre</label>
            <input type="number" id="numero" value="1">
            <label for="numero">Numero</label>
            <input type="text" id="autor" value="Name">
            <label for="autor">Auteur</label>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Annuler</a>
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Modifier</a>
        </div>
    </div>

    <div id="modaldelet" class="modal red white-text">
        <div class="modal-content">
            <h3><i class="material-icons left collecico">report_problem</i>Supprimer</h3>
            <h5>Etes vous sûr de vouloir supprimer <b>Title</b> numéro <b>1</b> ?</h5>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Annuler</a>
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Supprimer</a>
        </div>
    </div>


	<script src="js/librairies/jquery.js"></script>
    <script src="js/librairies/materialize.js"></script>
    <script src="js/material.js"></script>
    <script src="js/ajoutAmi.js"></script>
    <script src="js/affichage_collec.js"></script>

    
</body>

</html>