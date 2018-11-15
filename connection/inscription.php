<?php
include "../../connexion/connexion_bdd.php";

if (isset($_POST['username'])){
    if($_POST['username'] != "" and $_POST['mail'] != "" and $_POST['password'] != ""){
        if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $user_name = $_POST['username'];
            $user_mail = $_POST['mail'];
            $user_password = $_POST['password'];
            $pass_hache = password_hash($user_password,PASSWORD_DEFAULT);

            $result = pg_query(
                "INSERT INTO tab_admin
                (nom_admin, user_mail, user_password, avatar_id)
                VALUES
                ('".$user_name."', '".$user_mail."', '".$pass_hache."', ".$avatar_id.")"
            );

            if($result){
                echo "nouvel utilisisateur : ".$user_name." créé" ;
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

?>