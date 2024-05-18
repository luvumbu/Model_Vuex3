<?php 
session_start();
header("Access-Control-Allow-Origin: *"); 
 
require_once '../../../class/DatabaseHandler.php';
require_once '../../../class/config.php';
 
 





$file_path = $_SESSION["file_path"] ; 
$total = $_SESSION["total"] ; 


$time = $_SESSION["name"] ; 
 $information_user_id_sha1 = $_SESSION["information_user_id_sha1"] ;
 $information_user_name_1 = $_POST["information_user_name_1"]; 
$information_user_name_2 = $_POST["information_user_name_2"] ; 
$databaseHandler01 = new DatabaseHandler($username ,$password);



//$time2 = "time2".time();

//echo  $information_user_id_sha1 ; 
$databaseHandler01->action_sql('UPDATE  `information_user` SET `information_user_img_name` = "'.$time.'",`information_user_img_extennsion` = "'.$total.'",`information_user_img_path` = "'.$file_path.'"  WHERE  `information_user_id_sha1` = "'.$information_user_id_sha1.'"') ; 

//$databaseHandler01->action_sql("UPDATE `information_user` SET `information_user_name_2` = '$time2' WHERE  `information_user_id_sha1` = $information_user_id_sha1;") ; 

?>

<script>
   window.location.href = "../../../index.php";
</script>