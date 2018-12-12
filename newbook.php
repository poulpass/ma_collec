<?php
session_start();

include 'connection/connexion_bdd.php';

if (isset($_POST['titre'])){
    if($_POST['titre'] != ""){
            $pseudo = $_SESSION['user'];
            $titre = $_POST['titre'];
            $tome = $_POST['tome'];
            $autor = $_POST['autor'];
            $bd = $_POST['bd'];

            $requeteIdUser = pg_fetch_array(pg_query("SELECT user_id FROM public.user WHERE user_pseudo = '".$pseudo."';"));
            $requeteCheck = pg_fetch_array(pg_query("SELECT book_id FROM public.book WHERE book_name = '".$titre."' AND book_num = ".$tome.";"));
            if($requeteCheck){
            $rows = pg_num_rows(pg_query("SELECT book_id FROM public.relation2 WHERE book_id = ".$requeteCheck[0]." AND user_id = ".$requeteIdUser[0].";"));
            }
            else{
                $rows = 0;
            }
            if($rows == 0){
                $result = pg_query(
                    "INSERT INTO public.book
                    (book_name, book_num, book_autor, book_bd)
                    VALUES
                    ('".$titre."', '".$tome."', '".$autor."', '".$bd."')"
                );
                $requeteLast = pg_fetch_array(pg_query("SELECT max(book_id) FROM public.book"));
                $intermediaire = pg_query(
                    "INSERT INTO public.relation2
                    (user_id, book_id)
                    VALUES
                    (".$requeteIdUser[0].", ".$requeteLast[0].")"
                );
                if($result){
                    echo "Nouvelle lecture ajoutée.";
                    //header('Location: book.php'); 
                }
            
            }
    
        else{
            echo $titre ;
            echo ' ' ;
            echo $tome ;
            echo ' est déjà dans ta collec' ;
        }
    }
}
?>