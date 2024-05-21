 
<?php


$information_user_id_sha1 = $liste_projet_admin_id_sha1__ ; 
$databaseHandler01 = new DatabaseHandler($username ,$password);
$databaseHandler01->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_id_sha1`="'.$information_user_id_sha1.'" ',"information_user_name_1");
$databaseHandler02 = new DatabaseHandler($username ,$password);
$databaseHandler02->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_id_sha1`="'.$information_user_id_sha1.'" ',"information_user_name_2");
$databaseHandler03 = new DatabaseHandler($username ,$password);
$databaseHandler03->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_id_sha1`="'.$information_user_id_sha1.'" ',"information_user_img_path");
$array_information_user_name_1 = $databaseHandler01->tableList_info[0] ; 
$array_information_user_name_2 = $databaseHandler02->tableList_info[0] ; 
$information_user_img_path =str_replace("../","",$databaseHandler03->tableList_info[0]);

 
 
$file = $information_user_img_path;
$time="";
if (file_exists($file)) {
   
    $time=$information_user_img_path;
} else {
  $databaseHandler01->action_sql('UPDATE  `information_user` SET `information_user_img_name` = "'.$time.'",`information_user_img_extennsion` = "'.$total.'",`information_user_img_path` = "'.$file_path.'"  WHERE  `information_user_id_sha1` = "'.$information_user_id_sha1.'"') ; 

}
 

?>
<div class="card">
      <h2>
      <?php echo  $array_information_user_name_1 ?>
      </h2>
      <div id="data_user_img"  title="data_user">
            

            <?php 
    if( $time!=""){
echo '<img id="src_src" src="'.$information_user_img_path.'" alt=""></br>';



  
    }
    else {
      echo '<div id="img_s"></div>';
    }
            ?>
      </div>

 
      <p><?php echo  $array_information_user_name_2 ?></p>
</div>


<style>
   input{
    border:1px solid rgba(0,0,0,0.2) ; 
  }
  #data_user_img{
 
 
    margin-top:50px; 
    margin-bottom: 50px;
  }
  #data_user_img:hover{
   
  }
  #data_user_img img {
    max-width: 260px;
    text-align: center;
  }
  #img_s{
    width: 100px;
    height: 100px;
    border: 1px solid rgba(0,0,0,0.2);
  }
  .remove_img{
    margin-top:15px;  
    padding: 5px;
  }
  .array_remove_img{
    margin-top:50px; 
    background-color: black;
    text-align: center;
    display: flex;
    justify-content: space-between;
    color:white ; 
  }
  .array_remove_img p {
    margin-top:15px;
  }
  .array_remove_img:hover{
    cursor: pointer;
  }
  .display_none{
    display: none;
  }
</style>

<script>
  function array_remove_img( _this){
    _this.style.display="none" ; 
    document.getElementById("array_remove_img").className="array_remove_img"; 
  }

  function array_remove_img_choise(_this){
   





 const myTimeout = setTimeout(xxx, 250);



    if(_this.title=="yes"){


       
      var ok = new Information("exe_on/php/update/remove_file.php"); // création de la classe 
 // ok.add("information_user_login", information_user_login.value); // ajout de l'information pour lenvoi 
 
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 


 



    }

    function xxx() {
    location.reload() ; 
  }
  
  }
</script>