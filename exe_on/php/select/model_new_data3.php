<?php
$img_background = "img_background_" ; 
$img_background = "img_background_2" ; 


if (class_exists('Get_anne')) {
  
} else {
     require 'class/Get_anne.php';
}
 
for ($a = 0; $a < count($liste_projet_admin_id_sha1_->tableList_info); $a++) {
 
 
    if(isset($_SESSION["information_user_id_sha1"])){

  

if($_SESSION["information_user_id_sha1"]==$liste_projet_admin_id_sha1_user_->tableList_info[$a]){
    require_once 'model_new_for_data3.php' ;

}

    }
    else {
 
 

if($liste_projet_visibility_->tableList_info[$a]=="(0-0)"){

}
else {
    require_once 'model_new_for_data3.php' ;

}

    }
 
}
?>