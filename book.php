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
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Chercher</label>
                </div>
  
            </div>
            <div class="col l1 s2">
                <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">sort_by_alpha</i></a>
            </div>
            <div class="col l1 s2">
                <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">event</i></a>
            </div>


        </div>
    </div>

    <div class="container">

 
        <ul class="collection">
            <li class="collection-item avatar red">
                <i class="ico-resize material-icons circle white red-text">import_contacts</i>
                <span class="title big-title">Title</span> 
                <br>
                <span>Tome n°</span>
                <span class="title">1</span>
                <br>
                <span>Auteur : </span>
                <span class="title">Name</span>
                <a href="#modaledit" class="modal-trigger waves-effect btn-large secondary-content red darken-4 white-text btndeletedit valign-wrapper"><i class="material-icons editdelet">border_color</i></a>
                <a href="#modaldelet" class="modal-trigger waves-effect btn-large secondary-content red darken-4 white-text btndeletedit valign-wrapper delete"><i class="material-icons editdelet">delete</i></a>

            </li>
        </ul>
        
    </div>

    <div id="modaladd" class="modal">
        <div class="modal-content">
            <h4>Ajouter à la collec</h4>
            <input type="text" id="titre" value="">
            <label for="titre">Titre</label>
            <input type="number" id="numero" value="">
            <label for="numero">Numero</label>
            <input type="text" id="autor" value="">
            <label for="autor">Auteur</label>
            <div class="switch">
                <label>
                BD
                <input type="checkbox">
                <span class="lever"></span>
                Livre
                </label>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Annuler</a>
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Ajouter</a>
        </div>
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

    
</body>

</html>