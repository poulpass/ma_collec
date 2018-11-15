<?php
session_start();

include 'connection/connexion_bdd.php';

if (isset($_POST['mailami'])){
    if($_POST['mailami'] != ""){
        if (filter_var($_POST['mailami'], FILTER_VALIDATE_EMAIL)) {
            $pseudo = $_SESSION['user'];
            $mail_ami = $_POST['mailami'];
            $requeteIdAmi = pg_fetch_array(pg_query("SELECT user_id FROM public.user WHERE user_mail = '".$mail_ami."';"));
            if($requeteIdAmi){
            $requeteIdUser = pg_fetch_array(pg_query("SELECT user_id FROM public.user WHERE user_pseudo = '".$pseudo."';"));
            $requeteCheck = pg_query("SELECT friend_id FROM public.ami WHERE fuser_id = ".$requeteIdAmi[0]." AND friend_id = ".$requeteIdUser[0].";");
            $rows = pg_num_rows($requeteCheck);

            if($rows == 0){
                $result = pg_query(
                    "INSERT INTO public.ami
                    (fuser_id, friend_id, friend_ok)
                    VALUES
                    (".$requeteIdAmi[0].", ".$requeteIdUser[0].", false)"
                );
                if($result){
                    echo "nouvel demande d'ami envoyée" ;
                }

            }
            else{
                echo "Cette demande à déjà été faite.";
            }
        }
        else{
            echo "Ce mail ne correspond à aucun utilisateur.";
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