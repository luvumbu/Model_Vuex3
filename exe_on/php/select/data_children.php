<?php
      $liste_projet_admin_id_ = new DatabaseHandler($username ,$password);   
      $liste_projet_admin_id_sha1_ = new DatabaseHandler($username ,$password);     
      $liste_projet_admin_id_sha1_user_ = new DatabaseHandler($username ,$password);     
      $liste_projet_admin_name1_ = new DatabaseHandler($username ,$password);     
      $liste_projet_admin_name2_ = new DatabaseHandler($username ,$password); 
      $liste_projet_admin_img_path_ =new DatabaseHandler($username ,$password); 

      $liste_projet_admin_id_sha1 = $_SESSION['liste_projet_admin_insert'] ; 


      if(isset($_SESSION['liste_projet_admin_insert'])){
            $liste_projet_admin_id_sha1 = $_SESSION["liste_projet_admin_insert"] ; 
            
          }
          else {
            $liste_projet_admin_id_sha1 = $_SESSION["information_user_id_sha1"] ; 
          }
      
      $info_sql ='SELECT * FROM `liste_projet_admin` WHERE  `liste_projet_admin_sha1_parent` ="'.$liste_projet_admin_id_sha1.'" ORDER BY  `liste_projet_admin_id_sha1` ASC ' ; 
      
      
      $liste_projet_admin_id_->getDataFromTable($info_sql,"liste_projet_admin_id");
      $liste_projet_admin_id_sha1_->getDataFromTable($info_sql,"liste_projet_admin_id_sha1");
      $liste_projet_admin_id_sha1_user_->getDataFromTable($info_sql,"liste_projet_admin_id_sha1_user");
      $liste_projet_admin_name1_->getDataFromTable($info_sql,"liste_projet_admin_name1");
      $liste_projet_admin_name2_->getDataFromTable($info_sql,"liste_projet_admin_name2");
      $liste_projet_admin_img_path_->getDataFromTable($info_sql,"liste_projet_admin_img_path");
      


 
      
      
 


      for($a = 0 ; $a <count($liste_projet_admin_id_sha1_->tableList_info); $a ++) {

       $img_src=  str_replace("../","",$liste_projet_admin_img_path_->tableList_info[$a]);  

      $_liste_projet_admin_name1 =  $liste_projet_admin_name1_->tableList_info[$a] ; 
      $_liste_projet_admin_name2 =  $liste_projet_admin_name2_->tableList_info[$a] ; 
      $_liste_projet_admin_id_sha1_ = $liste_projet_admin_id_sha1_->tableList_info[$a] ; 
        
       
            
            ?>
<div class="card">
      <h2>            
            <input type="text" title="<?php echo $liste_projet_admin_id_sha1_->tableList_info[$a] ?>" id="<?php  echo 'liste_projet_admin_name1_'.$liste_projet_admin_id_sha1_->tableList_info[$a] ?>" onkeyup="liste_projet_admin_key_up(this)" value="<?php echo $_liste_projet_admin_name1 ?>">
      </h2>
      <div class="img_background_" id="<?php echo $_liste_projet_admin_id_sha1_ ?>" onclick="add_picture(this)" title="data_children">


    
                  <img src="<?php echo  $img_src ?>" alt="" srcset="">
      </div>
      <!-- <h5>Title description, Sep 2, 2017</h5> -->
       
<textarea title="<?php echo $liste_projet_admin_id_sha1_->tableList_info[$a] ?>" id="<?php  echo 'liste_projet_admin_name2_'.$liste_projet_admin_id_sha1_->tableList_info[$a] ?>" onkeyup="liste_projet_admin_key_up(this)" value="<?php echo "" ?>">
<?php echo $_liste_projet_admin_name2 ?>
</textarea>
<img width="50"  onclick="remove_block(this)" title="<?php echo $liste_projet_admin_id_sha1_->tableList_info[$a] ?>" class="remove_block cursor_pointer" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1"/>
    </div>
            <?php
      }

 
 

 ?>



<style>
      .remove_block{
            margin-top: 40px;
            margin-bottom: 40px;

      }
</style>

 
 


  
<style>
  #add_projet {
    display: none;
  }
</style>
  

 
 
  



 
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