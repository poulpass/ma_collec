<?php
session_start();

include "connection/connexion_bdd.php";

$pseudo = $_SESSION['user'];
$requeteIdUser = pg_fetch_array(pg_query("SELECT user_id FROM public.user WHERE user_pseudo = '".$pseudo."';"));

$ami_id = (int)$_POST['nom'];

    $result = pg_query(
        "DELETE FROM public.ami
        WHERE friend_id ='".$ami_id."' AND fuser_id = $requeteIdUser[0]"
    );
    $result2 = pg_query(
        "DELETE FROM public.ami
        WHERE friend_id ='".$requeteIdUser[0]."' AND fuser_id = '".$ami_id."'"
    );
    if($result){
        echo "Refusé !" ;
    }

    $requeteCheckNew = pg_fetch_array(pg_query("SELECT friend_id FROM public.ami WHERE fuser_id = '".$requeteIdUser[0]."' AND friend_ok = FALSE;"));
    if ($requeteCheckNew = null){
        header('Location: collec/amis.php'); 

    }
?>
