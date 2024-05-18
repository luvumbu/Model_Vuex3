<?php
      $liste_projet_admin_id_ = new DatabaseHandler($username ,$password);   
      $liste_projet_admin_id_sha1_ = new DatabaseHandler($username ,$password);     
      $liste_projet_admin_id_sha1_user_ = new DatabaseHandler($username ,$password);     
      $liste_projet_admin_name1_ = new DatabaseHandler($username ,$password);     
      $liste_projet_admin_name2_ = new DatabaseHandler($username ,$password); 
      $liste_projet_admin_img_path_ =new DatabaseHandler($username ,$password); 


      $info_sql ='SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_sha1_parent`="'.$information_user_id_sha1.'" ' ; 
      
      
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

        
       
            
            ?>
<div class="card">
      <h2>            
            <input type="text" title="<?php echo $liste_projet_admin_id_sha1_->tableList_info[$a] ?>" id="<?php  echo 'liste_projet_admin_name1_'.$liste_projet_admin_id_sha1_->tableList_info[$a] ?>" onkeyup="liste_projet_admin_key_up(this)" value="<?php echo $_liste_projet_admin_name1 ?>">
      </h2>
      <div class="img_background_" id="<?php echo $img_background_ ?>" onclick="add_picture(this)" title="data_children">


    
                  <img src="<?php echo  $img_src ?>" alt="" srcset="">
      </div>
      <!-- <h5>Title description, Sep 2, 2017</h5> -->
       
<textarea title="<?php echo $liste_projet_admin_id_sha1_->tableList_info[$a] ?>" id="<?php  echo 'liste_projet_admin_name2_'.$liste_projet_admin_id_sha1_->tableList_info[$a] ?>" onkeyup="liste_projet_admin_key_up(this)" value="<?php echo "" ?>">
<?php echo $_liste_projet_admin_name2 ?>
</textarea>
      <img class="plus_element cursor_pointer" onclick="data_parent_plus(this)" width="50" height="50" src="https://img.icons8.com/color/50/add--v1.png" alt="add--v1"/>

    </div>
            <?php
      }

 
 

 