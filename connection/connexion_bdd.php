<?php
	include 'user.php';
	include 'mdp.php';
	
	$connect = pg_connect("host=postgresql-pilou.alwaysdata.net port=5432 dbname=pilou_collec user=".$user." password=".$pswd." ");
?>