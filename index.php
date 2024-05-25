<?php 
session_start() ; 
 


//$_SESSION['liste_projet_admin_insert'] ="1716104659";
?>
 
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Bokonzi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBKPobqhRJiwU_oWCatudWL5RM0UVfTWgfku9DwDKLutYO90g3M3SHqo4OVuGQWqqFSsU&usqp=CAU">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body onmousemove="myFunction(event)" onmouseout="clearCoor()">  




<?php 
$path_DatabaseHandler ='class/DatabaseHandler.php' ;  
$form_log_dbd         ='view/off/form_log_dbd.php' ;
$form_log_dbd_user_on ='view/on/form_log_dbd_user_on.php';
$page_principal_index ="index.php" ; 
$give_url = "class/give_url.php" ; 
$log ='view/on/log.php';

$information_user_id_sha1_session= 'information_user_id_sha1' ; 


$index_js= 'index_js.php';
$index_css= 'index_css.php';
$Get_anne= 'class/Get_anne.php';
$log_css= 'exe_on/php/select/log_css.php';
$presentation2= 'exe_on/php/select/presentation2.php' ; 

 


$fichier_connexion    ='class/config.php' ;
$reload_page          ='<meta http-equiv="refresh" content="0;URL=">';
require_once "class/ascii_de_mot.php"; 
require_once $path_DatabaseHandler; 
require_once $give_url; 




if (file_exists($fichier_connexion)) {
require_once $fichier_connexion;   
$databaseHandler = new DatabaseHandler($username, $password); 
if(!$databaseHandler->verif) {   
    unlink($fichier_connexion) ;     
 //   echo $reload_page  ;
} 

if( $databaseHandler->existance_table("information_user")==0){
  // verification de l'existance de la table information_user
  // si la table n'existe pas on efface le fichier configuration et on recharge la page
  unlink($fichier_connexion) ;     
 // echo $reload_page  ;
}
    
     if(isset($_SESSION[$information_user_id_sha1_session])){     
         require_once $log; 
      ?>
<style>
  .presentation{
    display: none;
  }
</style>
      <?php 
    } 
    else{
      require_once $form_log_dbd_user_on; 
    } 
  } 
else {   
    require_once $form_log_dbd; 
} 
  //echo give_url() ;
   
  
 
  

  require_once $index_js ; 
  require_once $index_css ; 
  require_once $Get_anne ; 
  require_once $log_css ; 


  
  if(!isset($_SESSION[$information_user_id_sha1_session])){     
       require_once $presentation2 ; 
  }

 


  
?>
 
 
 <script>
function myFunction(e) {
  let x = e.clientX;
  let y = e.clientY;
  let coor = "Coordinates: (" + x + "," + y + ")";
 


  console.log(coor) ; 

  let height = screen.width;
 console.log( height+"px") ; 
}

function clearCoor() {
 // document.getElementById("demo").innerHTML = "";


}
</script>
        <script src="exe_off/js/class.js"></script>




        <style>
          textarea{
            color:black ; 
          }
        </style>

</body>
</html>