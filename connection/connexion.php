<?php

session_start();

include '../connection/connexion_bdd.php';

    
    if(isset($_POST['username'])){

        $pseudo = $_POST['username'];
        $motdepasse = $_POST ['password'];
        
    
        if ($pseudo){ 
            
            $verif_mdp = pg_fetch_all(pg_query("SELECT user_password FROM public.user WHERE user_pseudo = '".$pseudo."';"));
            $hashe = $verif_mdp[0]['user_password'];
            
                if (password_verify($motdepasse, $hashe)){  

                    $_SESSION['co'] = true;
                    $_SESSION['user'] = $pseudo;
                        
                    header('Location: ../main.php');  
                }  
                else{
                    echo "le mot de passe n'est pas valide";
                }
        }
        else{
            echo "le pseudonyme n'est pas valide";
        }


    }
else{
    echo "NON";
}
?>