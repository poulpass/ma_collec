<?php

include 'connection/connexion_bdd.php';

$pseudo = $_SESSION['user'];
$requeteIdUser = pg_fetch_array(pg_query("SELECT user_id FROM public.user WHERE user_pseudo = '".$pseudo."';"));
$requeteCheckNew = pg_query("SELECT friend_id FROM public.ami WHERE fuser_id = '".$requeteIdUser[0]."' AND friend_ok = FALSE;");
if ($requeteCheckNew != null){

    while ($recupUserCard = pg_fetch_array($requeteCheckNew)) {

    $requeteContentUser = pg_fetch_array(pg_query("SELECT user_pseudo, avatar_id, user_id FROM public.user WHERE user_id = ".$recupUserCard['friend_id'].";"));
    $requeteAvatar = pg_fetch_array(pg_query("SELECT avatar_name FROM public.avatar WHERE avatar_id = ".$requeteContentUser['avatar_id'].";"));

    echo'
    <li class="collection-item avatar red">
    <div>
        <div class="circle white red-text userface">
            <img class="circle white red-text userpic" src="faces/svg/'.$requeteAvatar['avatar_name'].'.svg">
        </div>                
        <span class="title big-title">'.$requeteContentUser['user_pseudo'].'</span> 
        <br>
        <span>Collection de </span>
        <span class="title">1 </span>
        <span>objets</span>
        <a value="'.$requeteContentUser['user_id'].'" href="amis.php" class="ajoutami waves-effect btn-large secondary-content green white-text btndeletedit valign-wrapper"><i class="material-icons editdelet">done</i></a>
        <a value="'.$requeteContentUser['user_id'].'" href="#" class="deleteUser waves-effect btn-large secondary-content red darken-4 white-text btndeletedit valign-wrapper delete"><i class="material-icons editdelet">clear</i></a>
        </div>
    </li>';
    }
}
?>

