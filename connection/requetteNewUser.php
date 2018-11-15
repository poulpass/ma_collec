<?php
include "../connection/connexion_bdd.php";

if (isset($_POST['user_pseudo'])){
    if($_POST['user_pseudo'] != "" and $_POST['mail'] != "" and $_POST['password'] != ""){
        if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $user_pseudo = $_POST['user_pseudo'];
            $user_mail = $_POST['mail'];
            $user_password = $_POST['password'];
            $pass_hache = password_hash($user_password,PASSWORD_DEFAULT);
            $avatar =  (int)$_POST['avatar'];

            $result = pg_query(
                "INSERT INTO public.user
                (user_pseudo, user_mail, user_password, avatar_id)
                VALUES
                ('".$user_pseudo."', '".$user_mail."', '".$pass_hache."', '".$avatar."')"
            );

            if($result){
                echo "nouvel utilisisateur : ".$user_pseudo." créé" ;
                header('Location: ../main.php');  
            }
        }
        else{
            echo "Veuillez entrer un email valide.";
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