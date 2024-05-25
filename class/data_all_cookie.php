<?php 
session_start() ; 
$_SESSION['liste_projet_admin_insert'] = $_POST["liste_projet_admin_id_sha1"]; 
// permet de s'avoir lors que l'utilisateur eest connecte si il a fais la demande voir c'est documents 
?>