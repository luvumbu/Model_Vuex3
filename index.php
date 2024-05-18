<?php 
session_start() ; 
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
<body>  
<?php 
$path_DatabaseHandler ='class/DatabaseHandler.php' ;  
$form_log_dbd         ='view/off/form_log_dbd.php' ;
$form_log_dbd_user_on ='view/on/form_log_dbd_user_on.php';
$log ='view/on/log.php';

$fichier_connexion    ='class/config.php' ;
$reload_page          ='<meta http-equiv="refresh" content="0;URL=">';
 
require_once $path_DatabaseHandler; 
require_once 'class/give_url.php'; 


if (file_exists($fichier_connexion)) {
require_once $fichier_connexion;   
$databaseHandler = new DatabaseHandler($username, $password); 
if(!$databaseHandler->verif) {   
    unlink($fichier_connexion) ;     
    echo $reload_page  ;
} 

if( $databaseHandler->existance_table("information_user")==0){
  // verification de l'existance de la table information_user
  // si la table n'existe pas on efface le fichier configuration et on recharge la page
  unlink($fichier_connexion) ;     
  echo $reload_page  ;
}
    
     if(isset($_SESSION["information_user_id_sha1"])){     
      require_once $log; 
    } 
    else{
      require_once $form_log_dbd_user_on; 
    } 
  } 
else {   
    require_once $form_log_dbd; 
} 
  //echo give_url() ;
  if(give_url()=="index.php"){
    ?>
        <script src="exe_off/js/const_all.js"></script>
        <script src="exe_off/js/class.js"></script>
    <?php
  }
  else {
  require_once 'exe_off/js/const_all.php' ; 
  require_once 'exe_off/js/class.php' ; 
  }
?>
<script>
      const information_user_name_1 = document.getElementById("information_user_name_1");
      const information_user_name_2 = document.getElementById("information_user_name_2");
    function destroy(){
        Ajax("destroy","class/destroy.php");
        const myTimeout2 = setTimeout(destroy, 50);
function destroy() {
  location.reload();
}
    }

 function information_user_key_up() {
 console.log(information_user_name_1.value) ; 
 console.log(information_user_name_2.value) ; 
  var ok = new Information("exe_on/php/update/information_user_key_up.php"); // création de la classe 
  ok.add("information_user_name_1", information_user_name_1.value); // ajout de l'information pour lenvoi 
  ok.add("information_user_name_2", information_user_name_2.value); // ajout d'une deuxieme information denvoi  
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 
}

function liste_projet_admin_key_up(_this){
 

  const liste_projet_admin_name1 = document.getElementById("liste_projet_admin_name1_"+_this.title);
  const liste_projet_admin_name2 = document.getElementById("liste_projet_admin_name2_"+_this.title);


   

console.log(liste_projet_admin_name1.value) ; 
console.log(liste_projet_admin_name2.value) ; 
 
 
  var ok = new Information("exe_on/php/update/liste_projet_admin_key_up.php"); // création de la classe 
  ok.add("liste_projet_admin_name1", liste_projet_admin_name1.value); // ajout de l'information pour lenvoi 
  ok.add("liste_projet_admin_name2", liste_projet_admin_name2.value); // ajout d'une deuxieme information denvoi  
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 
 



}
 

 function add_picture(_this){

 

 

  var ok = new Information("exe_on/php/info/add_picture.php"); // création de la classe 
  ok.add("liste_projet_admin_id_sha1", _this.id); // ajout de l'information pour lenvoi 
  ok.add("id", _this.id); // ajout de l'information pour lenvoi 

 
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 
 window.location.href = "add_picture/index.php";
 }
</script>

<style>
  body{
    margin: 0;
    padding: 0;
  }
  .cursor_pointer:hover{
    cursor: pointer;
  }
</style>



</body>
</html>