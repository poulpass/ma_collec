<?php
session_start();


if(empty($_SESSION['co'])){

    header('Location: connection.php');     
}
else {
    include "connection/connexion_bdd.php";

    $pseudo = $_SESSION['user'];
    $requeteNom = pg_fetch_array(pg_query("SELECT user_pseudo FROM public.user WHERE user_pseudo = '".$pseudo."';"));
    $requeteAvatar = pg_fetch_array(pg_query("SELECT avatar_id FROM public.user WHERE user_pseudo = '".$pseudo."';"));
    $resultAvatar = pg_fetch_array(pg_query("SELECT avatar_name FROM public.avatar WHERE avatar_id = ".$requeteAvatar[0].";"));
}


?>

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

<body>
<ul id="dropdown1" class="dropdown-content bigdropdown">
  <li><a href="modifprofil.php">Paramètres</a></li>
  <li class="divider"></li>
  <li><a href="connection/deconnexion.php">Déconnecton</a></li>
</ul>
    <nav>
        <div class="nav-wrapper">
            <a href="main.php" class="brand-logo">Ma collection</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="amis.php">Amis</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><?php echo "$requeteNom[0]";?><img class="white red-text navpic right" src="faces/svg/<?php echo "$resultAvatar[0]";?>.svg"></a></li>
            </ul>
        </div>
    </nav>

	<script src="js/librairies/jquery.js"></script>
    <script src="js/librairies/materialize.js"></script>
    <script src="js/material.js"></script>

</body>

</html>