<?php 

require_once 'class/give_url.php' ; 
 
 echo give_url() ;


 $src = "../blog.php/".give_url() ;
if (!headers_sent()) {
 header("Location:  $src");
  exit;
}
 
  ?>