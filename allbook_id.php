<?php
session_start();

include 'connection/connexion_bdd.php';

$pseudo = $_SESSION['user'];
$requeteIdUser = pg_fetch_array(pg_query("SELECT user_id FROM public.user WHERE user_pseudo = '".$pseudo."';"));
$requeteCheckNew = pg_query("SELECT book_name, book_num, book_autor, book_bd, public.book.book_id 
FROM public.book 
INNER JOIN public.relation2 ON public.relation2.book_id = public.book.book_id
INNER JOIN public.user ON public.user.user_id = public.relation2.user_id
WHERE public.relation2.user_id = '".$requeteIdUser[0]."' ORDER BY book_id ASC
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
            <a id="'.$requeteContentUser['book_id'].'" href="#modaledit" class="modal-trigger waves-effect btn-large secondary-content red darken-4 white-text btndeletedit valign-wrapper"><i class="material-icons editdelet">border_color</i></a>
            <a id="'.$requeteContentUser['book_id'].'" href="#modaldelet" class="modal-trigger waves-effect btn-large secondary-content red darken-4 white-text btndeletedit valign-wrapper delete"><i class="material-icons editdelet">delete</i></a>

        </li>';

        
        }
    }
}
?>

