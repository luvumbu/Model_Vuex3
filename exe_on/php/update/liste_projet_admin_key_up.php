<?php 
session_start();
header("Access-Control-Allow-Origin: *"); 
 
require_once '../../../class/DatabaseHandler.php';
require_once '../../../class/config.php';
require_once '../../../class/ascii_de_mot.php';

 



$information_user_id_sha1 = $_POST["information_user_id_sha1"] ;
$time = time() ;  
$liste_projet_admin_name1 = $_POST["liste_projet_admin_name1"];   
$liste_projet_admin_name2 = $_POST["liste_projet_admin_name2"]  ; 
$databaseHandler01 = new DatabaseHandler($username ,$password);


 
 
$liste_projet_admin_name1_ascii1 = ascii_de_mot($liste_projet_admin_name1);

$liste_projet_admin_name1_ascii2 = ascii_de_mot($liste_projet_admin_name2);
 
 


$databaseHandler01->action_sql('UPDATE  `liste_projet_admin` SET `liste_projet_admin_name1` =  "'.$liste_projet_admin_name1_ascii1.'" , `liste_projet_admin_name2` =  "'.$liste_projet_admin_name1_ascii2.'"  WHERE  `liste_projet_admin_id_sha1` = "'.$information_user_id_sha1.'"') ;
 

?>