<?php

/*
$liste_projet_admin_id_ = new DatabaseHandler($username, $password);
$liste_projet_admin_id_sha1_ = new DatabaseHandler($username, $password);
$liste_projet_admin_id_sha1_user_ = new DatabaseHandler($username, $password);
$liste_projet_admin_name1_ = new DatabaseHandler($username, $password);
$liste_projet_admin_name2_ = new DatabaseHandler($username, $password);
$liste_projet_admin_img_path_ = new DatabaseHandler($username, $password);

*/
$liste_projet_admin_insert_bool = 10;

 
require 'model_new_data1.php' ; 
$info_sql = 'SELECT * FROM `liste_projet_admin` ORDER BY `liste_projet_admin_id` ASC LIMIT 1';
require 'model_new_data2.php' ; 
require 'model_new_data3_2.php' ; 

 
 
$liste_projet_admin_id_sha1___ = $liste_projet_admin_id_sha1_->tableList_info[0] ; 
 

 
require 'model_new_data1.php' ; 
$info_sql = 'SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_sha1_parent`="'.$liste_projet_admin_id_sha1___.'"';
require 'model_new_data2.php' ; 
require 'model_new_data3_2.php' ; 
 
 
 
require 'presentation_css.php' ; 
 


?>

