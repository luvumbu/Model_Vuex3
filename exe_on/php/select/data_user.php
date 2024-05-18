
<?php
$databaseHandler01 = new DatabaseHandler($username ,$password);
$databaseHandler01->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_id_sha1`="'.$information_user_id_sha1.'" ',"information_user_name_1");

$databaseHandler02 = new DatabaseHandler($username ,$password);
$databaseHandler02->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_id_sha1`="'.$information_user_id_sha1.'" ',"information_user_name_2");

$databaseHandler03 = new DatabaseHandler($username ,$password);
$databaseHandler03->getDataFromTable('SELECT * FROM `information_user` WHERE `information_user_id_sha1`="'.$information_user_id_sha1.'" ',"information_user_img_path");
$array_information_user_name_1 = $databaseHandler01->tableList_info[0] ; 
$array_information_user_name_2 = $databaseHandler02->tableList_info[0] ; 
 

 

$information_user_img_path =str_replace("../","",$databaseHandler03->tableList_info[0]);
?>


<div class="card">
      <h2>
        <input onkeyup="information_user_key_up()" id="information_user_name_1" type="text" value="<?php echo  $array_information_user_name_1 ?>" placeholder="Votre nom" >       
      </h2>
      <div id="data_user_img" onclick="add_picture(this)" title="data_user">
            <img src="<?php echo $information_user_img_path ?>" alt="">
      </div>
      <p><input onkeyup="information_user_key_up()" id="information_user_name_2" type="text" value="<?php echo  $array_information_user_name_2 ?>"  placeholder="Déscription"></p>
</div>

<style>
   input{
    border:1px solid rgba(0,0,0,0.2) ; 
  }
  #data_user_img{
    border: 1px solid rgba(0,0,0,0.2);
 
    margin-top:50px; 
    margin-bottom: 50px;
  }
  #data_user_img:hover{
    cursor: pointer;
  }
  #data_user_img img {
    max-width: 260px;
    text-align: center;
  }
</style>