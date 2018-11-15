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
<div class="row maxH  valign-wrapper">

    <div class="container hide-on-med-and-down">
        <div class="row">
            <div class="col l6 m12 collec">
                <a id="btn-1" class="waves-effect waves-light btn black-text red beat" href="book.php"><i class="material-icons left collecico white-text">chrome_reader_mode</i>lecture</a>
            </div>


            <div class="col l6 m12 amis">
                <a id="btn-2" class="waves-effect waves-light btn blue black-text darken-3 beat"><i class="material-icons right amisico white-text">headset</i>musique</a>
            </div>
        </div>
        <div class="row">
            <div class="col l6 m12 collec">
                <a id="btn-3" class="waves-effect waves-light btn green black-text darken-2 beat" href="book.php"><i class="material-icons left collecico white-text">movie</i>ciné</a>
            </div>
     
            <div class="col l6 m12 amis">
                <a id="btn-4" class="waves-effect waves-light btn orange black-text darken-3 beat"><i class="material-icons right amisico white-text">gamepad</i>jeux</a>
            </div>
        </div>
    </div>


    <div class="container small-bye">
        <div class="row">
            <div class="col s12 collec">
                <a id="btn-5" class="waves-effect waves-light btn black-text red" href="book.php"><i class="material-icons left collecico2 white-text">chrome_reader_mode</i>lecture</a>
            </div>
        </div>
        <div class="row">
            <div class="col s12 amis">
                <a id="btn-6" class="waves-effect waves-light btn blue black-text darken-3"><i class="material-icons left collecico2 white-text">headset</i>musique</a>
            </div>
        </div>
        <div class="row">
            <div class="col s12 collec">
                <a id="btn-7" class="waves-effect waves-light btn green black-text darken-2" href="book.php"><i class="material-icons left collecico2 white-text">movie</i>ciné</a>
            </div>
        </div>
        <div class="row">
            <div class="col s12 amis">
                <a id="btn-8" class="waves-effect waves-light btn orange black-text darken-3"><i class="material-icons left collecico2 white-text">gamepad</i>jeux</a>
            </div>
        </div>
    </div>
</div>

	<script src="js/librairies/jquery.js"></script>
    <script src="js/librairies/materialize.js"></script>
    
</body>

</html>