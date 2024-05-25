<?php 
session_start();
header("Access-Control-Allow-Origin: *");  
require_once '../../../class/DatabaseHandler.php';
require_once '../../../class/config.php';
require_once '../../../class/ascii_de_mot.php';

 $information_user_id_sha1 = $_SESSION["information_user_id_sha1"] ;
$time = time() ; 
$information_user_name_1 = $_POST["information_user_name_1"];   
$information_user_name_2 = $_POST["information_user_name_2"] ; 
$databaseHandler01 = new DatabaseHandler($username ,$password);








$liste_projet_admin_name1_ascii = ascii_de_mot($information_user_name_1);
$liste_projet_admin_name2_ascii = ascii_de_mot($information_user_name_2);
 
$information_user_name_1 = $liste_projet_admin_name1_ascii  ;
$information_user_name_2 = $liste_projet_admin_name2_ascii  ;









 
$databaseHandler01->action_sql('UPDATE  `information_user` SET `information_user_name_1` = "'.$information_user_name_1.'",`information_user_name_2` = "'.$information_user_name_2.'" WHERE  `information_user_id_sha1` = "'.$information_user_id_sha1.'"') ;
?>