<!DOCTYPE html>

<html>

<head>
	<title>Ma Collection</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<?php
	include 'navbar.php';
?>
<body>

    <div class="container">
        <div class="row">
            <div class="col red" style="border-radius: 150px">
                <?php 
                    include 'connection/connexion_bdd.php';
                    $requeteIdUser = $_POST['id'];
                    $requeteIdAvatar = pg_fetch_array(pg_query("SELECT avatar_id FROM public.user WHERE user_id = $requeteIdUser"));
                    $requeteAvatar = pg_fetch_array(pg_query("SELECT avatar_name FROM public.avatar WHERE avatar_id = $requeteIdAvatar[0]"));
                    $requeteNom = pg_fetch_array(pg_query("SELECT user_pseudo FROM public.user WHERE user_id = '".$requeteIdUser."';"));
                ?>

                <div class="col" style="padding: 0px">
                    <img class="white red-text navpic" style="margin-bottom: 5px; margin-left: -3px; " src="faces/svg/<?php echo "$requeteAvatar[0]";?>.svg">
                </div>
                <div class="col">
                    <h5 class="white-text"><b><?php echo "$requeteNom[0]";?></b></h5>
                </div>
                
            </div>

            <div class="col s6">
                <div class="input-field">
                    <i class="material-icons prefix">search</i>
                    <input id="idguy" type="hidden" value="<?php echo"$requeteIdUser" ?>">
                    <input id="loupe_ami" type="text" class="validate">
                    <label for="loupe_ami">Chercher</label>
                </div>
  
            </div>

        </div>
    </div>

    <div class="container">

 
        <ul class="collection" id="affichage_book">
        <?php

include 'connection/connexion_bdd.php';

$pseudo = $_SESSION['user'];
$requeteIdUser = $_POST['id'];
$requeteCheckNew = pg_query("SELECT book_name, book_num, book_autor, book_bd, public.book.book_id 
FROM public.book 
INNER JOIN public.relation2 ON public.relation2.book_id = public.book.book_id
INNER JOIN public.user ON public.user.user_id = public.relation2.user_id
WHERE public.relation2.user_id = $requeteIdUser[0] ORDER BY book_name ASC, book_num ASC
;");

while ($recupUserBook = pg_fetch_array($requeteCheckNew)) {
    $requeteCheckbook = pg_query("SELECT book_name, book_num, book_autor, book_bd, book_id FROM public.book WHERE book_id = '".$recupUserBook[4]."' ;");


    if ($requeteCheckbook != null){

        while ($recupUserCard = pg_fetch_array($requeteCheckbook)) {

        $requeteContentUser = pg_fetch_array(pg_query("SELECT book_name, book_num, book_autor, book_bd, book_id 
        FROM public.book 
        WHERE book_id = '".$recupUserCard["book_id"]."';"));
        $ok = $requeteContentUser['book_bd'];
        if($ok == 't'){
            $icon = "import_contacts";
        }
        else{
            $icon = "chrome_reader_mode";
        }
        echo'
        <li class="collection-item avatar red">
            <i class="ico-resize material-icons circle white red-text">'.$icon.'</i>
            <span class="title big-title">'.$requeteContentUser['book_name'].'</span> 
            <br>
            <span>Tome n°</span>
            <span class="title">'.$requeteContentUser['book_num'].'</span>
            <br>
            <span>Auteur : </span>
            <span class="title">'.$requeteContentUser['book_autor'].'</span>

        </li>';

        
        }
    }
}
?>



        </ul>
        
    </div>



	<script src="js/librairies/jquery.js"></script>
    <script src="js/librairies/materialize.js"></script>
    <script src="js/material.js"></script>
    <script src="js/ajoutAmi.js"></script>
    <script src="js/affichage_collec_ami.js"></script>

    
</body>

</html>