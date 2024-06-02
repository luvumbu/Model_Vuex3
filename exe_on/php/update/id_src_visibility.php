<?php 
session_start();
header("Access-Control-Allow-Origin: *");  
require_once '../../../class/DatabaseHandler.php';
require_once '../../../class/config.php';
 
$liste_projet_visibility = $_POST["liste_projet_visibility"];   
$liste_projet_admin_id_sha1 = $_POST["liste_projet_admin_id_sha1"] ; 
 


$databaseHandler01 = new DatabaseHandler($username ,$password);
$databaseHandler01->action_sql('UPDATE  `liste_projet_admin` SET `liste_projet_visibility` = "'.$liste_projet_visibility.'"  WHERE  `liste_projet_admin_id_sha1` = "'.$liste_projet_admin_id_sha1.'"') ;
?>