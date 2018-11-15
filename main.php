
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

    <div class="container">
        <div class="col l6 m12 collec">
            <a id="btn-collec" class="waves-effect waves-light btn deep-purple beat" href="collec.php"><i class="material-icons left collecico">view_week</i>collec</a>

        </div>
        <div class="col l6 m12 amis">
            <a id="btn-amis" class="waves-effect waves-light btn light-green darken-3 beat" href="amis.php"><i class="material-icons right amisico">group</i>amis</a>

        </div>
    </div>
    </div>
	<script src="js/librairies/jquery.js"></script>
    <script src="js/librairies/materialize.js"></script>
    
</body>

</html>