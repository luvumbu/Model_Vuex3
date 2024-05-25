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



 




 /*
 
$liste_projet_admin_name1_ascii = '';

// Stocke chaque caractère du mot sous forme de code ASCII dans la variable $liste_projet_admin_name1_ascii
for ($i = 0; $i < strlen($liste_projet_admin_name1); $i++) {
    $liste_projet_admin_name1_ascii .= ord($liste_projet_admin_name1[$i]) . ' ';
}
*/




// Exemple d'utilisation avec un mot
 




$liste_projet_admin_name1_ascii = ascii_de_mot($liste_projet_admin_name1);
$liste_projet_admin_name2_ascii = ascii_de_mot($liste_projet_admin_name2);
 
$liste_projet_admin_name1 = $liste_projet_admin_name1_ascii  ;
$liste_projet_admin_name2 = $liste_projet_admin_name2_ascii  ;


 
$databaseHandler01->action_sql('UPDATE  `liste_projet_admin` SET `liste_projet_admin_name1` =  "'.$liste_projet_admin_name1.'" , `liste_projet_admin_name2` =  "'.$liste_projet_admin_name2.'"  WHERE  `liste_projet_admin_id_sha1` = "'.$information_user_id_sha1.'"') ;
 

?>