<?php
      $databaseHandler01 = new DatabaseHandler($username ,$password);     


      if(isset($_SESSION["liste_projet_admin_insert"])){
        
        $information_user_id_sha1 = $_SESSION['liste_projet_admin_insert'] ; 


     $list_sql ='SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1`="'.$information_user_id_sha1.'"'; 
      } 
      else {
        $list_sql ='SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1`="'.$information_user_id_sha1.'"  AND `liste_projet_admin_id_sha1_user` ="'.$information_user_id_sha1.'"'; 
   
      }
      $databaseHandler01->getDataFromTable($list_sql,"liste_projet_admin_name1");
      $databaseHandler01->getDataFromTable($list_sql,"liste_projet_admin_name2");
      $databaseHandler01->getDataFromTable($list_sql,"liste_projet_admin_img_path");
      $databaseHandler01->getDataFromTable($list_sql,"liste_projet_admin_id_sha1");
      
 
      $liste_projet_admin_name1_data = $databaseHandler01->tableList_info[0] ;
      $liste_projet_admin_name2_data = $databaseHandler01->tableList_info[1] ;    
      $xx =str_replace("../","",$databaseHandler01->tableList_info[2]);  
      $img_background_ =$databaseHandler01->tableList_info[3] ;
?>
<div class="card">
      <h2>            
            <input type="text" title="<?php echo $information_user_id_sha1 ?>" id="<?php  echo 'liste_projet_admin_name1_'.$information_user_id_sha1 ?>" onkeyup="liste_projet_admin_key_up(this)" value="<?php echo $liste_projet_admin_name1_data ?>">
      </h2>
      <div class="img_background_" id="<?php echo $img_background_ ?>" onclick="add_picture(this)" title="data_parent">
                  <img src="<?php echo $xx ?>" alt="" srcset="">
      </div>
      <!-- <h5>Title description, Sep 2, 2017</h5> -->
       
<textarea title="<?php echo $information_user_id_sha1 ?>" id="<?php  echo 'liste_projet_admin_name2_'.$information_user_id_sha1 ?>" onkeyup="liste_projet_admin_key_up(this)" value="<?php echo $liste_projet_admin_name2_data ?>">
<?php echo   $liste_projet_admin_name2_data ?>
</textarea>
       
      <img class="plus_element cursor_pointer" title="<?php echo $information_user_id_sha1 ?>" onclick="data_parent_plus(this)" width="50" height="50" src="https://img.icons8.com/color/50/add--v1.png" alt="add--v1"/>
       
       <?php
      if(isset($_SESSION["liste_projet_admin_insert"])){
        
    ?>
      <img class="plus_element cursor_pointer"  onclick="liste_projet_admin_insert_destroy()" width="50" height="50" src="https://img.icons8.com/ios-filled/50/save--v1.png" alt="save--v1"/>


   
<style>
  #add_projet {
    display: none;
  }
</style>
    <?php

 
      } 
 

?>
    </div>



 
<style>
    .plus_element{
        margin-top: 100px;
    }
        .img_background_ {
            margin-top: 50px; 
            margin-bottom: 50px; 
            min-width: 600px;
            min-height: 600px;
            border: 1px solid rgba(0,0,0,0.2);
            position: relative;
            height: 600px;
            overflow: hidden; /* Empêche l'image de dépasser la hauteur de la div */
        }

        .img_background_ img:hover {
            cursor: pointer;
        }

        .img_background_ img {
            max-height: 100%; /* Limite la hauteur de l'image à la hauteur de la div */
            width: auto; /* Maintient le ratio d'aspect de l'image */
            display: block; /* Évite les espaces indésirables sous l'image */
            margin: auto; /* Centre l'image horizontalement si elle est plus petite */
            position: relative;
        }
        textarea{
            width: 100%;
            height: 200px;
        }
    </style>