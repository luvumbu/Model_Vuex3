<div class="card text-center max_height" id="data_popular">
      <h3>Mes projet</h3>

     

<?php
      $liste_projet_admin_id_ = new DatabaseHandler($username ,$password);   
      $liste_projet_admin_id_sha1_ = new DatabaseHandler($username ,$password);     
      $liste_projet_admin_id_sha1_user_ = new DatabaseHandler($username ,$password);     
      $liste_projet_admin_name1_ = new DatabaseHandler($username ,$password);     
      $liste_projet_admin_name2_ = new DatabaseHandler($username ,$password); 
      $liste_projet_admin_img_path_ =new DatabaseHandler($username ,$password); 


      $info_sql ='SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1_user`="'.$information_user_id_sha1.'" AND `liste_projet_admin_sha1_parent` =""  ' ; 
      
      
      $liste_projet_admin_id_->getDataFromTable($info_sql,"liste_projet_admin_id");
      $liste_projet_admin_id_sha1_->getDataFromTable($info_sql,"liste_projet_admin_id_sha1");
      $liste_projet_admin_id_sha1_user_->getDataFromTable($info_sql,"liste_projet_admin_id_sha1_user");
      $liste_projet_admin_name1_->getDataFromTable($info_sql,"liste_projet_admin_name1");
      $liste_projet_admin_name2_->getDataFromTable($info_sql,"liste_projet_admin_name2");
      $liste_projet_admin_img_path_->getDataFromTable($info_sql,"liste_projet_admin_img_path");
      


      for($a = 0 ; $a <count($liste_projet_admin_id_sha1_->tableList_info); $a ++) {
        $liste_projet_admin_id_sha1__=  $liste_projet_admin_id_sha1_->tableList_info[$a] ; 
        $liste_projet_admin_name1__=  $liste_projet_admin_name1_->tableList_info[$a] ;   
        $max_length = 10;        
        // Utilisation de substr pour obtenir les 5 premiers caractères
       $liste_projet_admin_name1__= substr($liste_projet_admin_name1__, 0, $max_length);         

        ?>
      <div class="fakeimg cursor_pointer">
 
        <div>
          <?php  echo $liste_projet_admin_name1__.'...' ?>
        </div>   
        <div>
          <?php
          echo $a ;
          ?>
        </div>
        <br/>
        <?php
        if($liste_projet_admin_id_sha1__!=$information_user_id_sha1){
?>

 
<img class="img_colors" title="<?php echo $liste_projet_admin_id_sha1__ ?>" onclick="remove_block_(this)"  width="50" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1"/>

  <div class="display_none" id="<?php echo "remove_".$liste_projet_admin_id_sha1__ ?>" title="<?php echo $liste_projet_admin_id_sha1__ ?>" onclick="remove_block(this)">
  
  <img class="img_colors" width="50" height="50" src="https://img.icons8.com/fluency/50/delete-forever.png" alt="delete-forever"/>
  </div>



<?php 
        }
        ?>
        <div>
        <img onclick="liste_projet_admin_insert(this)" title="<?php echo  $liste_projet_admin_id_sha1__ ?>" class="img_colors" width="50" height="50" src="https://img.icons8.com/ios/50/preview-pane.png" alt="preview-pane"/>
        </div>
      </div> 
        <?php
      }
      
      
 ?>
</div>
<style>
  .img_colors{
    background-color: white;
    padding: 10px;
  }
  .fakeimg{
    display: flex;
    justify-content: space-around;
    transition: 1s all ; 
    margin-bottom: 5px;
    background-color: #584e80;
    color: white;

  }
 
  .max_height{
    max-height: 500px; 
    overflow-y: scroll; /* Hide vertical scrollbar */
  }
  .display_none{
    display: none;
  }
</style>