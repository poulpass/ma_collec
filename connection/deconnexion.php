<?php

include '../connexion/connexion_bdd.php';

session_start();
session_destroy();


header ('Location: ../main.php');


?>