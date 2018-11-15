<?php
session_start();

include "../connection/connexion_bdd.php";
$pseudo = $_SESSION['user'];

if (isset($_POST['user_pseudo'])){
    if($_POST['user_pseudo'] != "" and $_POST['mail'] != ""){
        $user_pseudo = $_POST['user_pseudo'];
        $user_mail = $_POST['mail'];
        $avatar = (int)$_POST['avatar'];

        $result = pg_query(
            "UPDATE public.user
            SET user_pseudo = '".$user_pseudo."',
            user_mail = '".$user_mail."',
            avatar_id = '".$avatar."' WHERE user_pseudo = '".$pseudo."'"
        );

        if($result){
            echo "Profil utilisisateur : ".$user_pseudo." modifié" ;
            header('Location: deconnexion.php');  
        }
        
    }
    else{
        echo "Veuillez remplir tous les champs.";
    }
}
else{
    echo "NON.";
}
?>