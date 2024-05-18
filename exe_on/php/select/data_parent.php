<?php
      $databaseHandler01 = new DatabaseHandler($username ,$password);     
      $databaseHandler01->getDataFromTable('SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1`="'.$information_user_id_sha1.'" AND `liste_projet_admin_id_sha1_user` ="'.$information_user_id_sha1.'"',"liste_projet_admin_name1");
      $databaseHandler01->getDataFromTable('SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1`="'.$information_user_id_sha1.'" AND `liste_projet_admin_id_sha1_user` ="'.$information_user_id_sha1.'"',"liste_projet_admin_name2");
      $liste_projet_admin_name1_data = $databaseHandler01->tableList_info[0] ;
      $liste_projet_admin_name2_data = $databaseHandler01->tableList_info[1] ;    
?>

<div class="card">
      <h2>            
            <input type="text" title="<?php echo $information_user_id_sha1 ?>" id="<?php  echo 'liste_projet_admin_name1_'.$information_user_id_sha1 ?>" onkeyup="liste_projet_admin_key_up(this)" value="<?php echo $liste_projet_admin_name1_data ?>">
      </h2>
      <!-- <h5>Title description, Sep 2, 2017</h5> -->
      <div class="fakeimg" style="height:200px;">Image</div>      
      <p><input type="text"  title="<?php echo $information_user_id_sha1 ?>" id="<?php  echo 'liste_projet_admin_name2_'.$information_user_id_sha1 ?>" onkeyup="liste_projet_admin_key_up(this)" value="<?php echo $liste_projet_admin_name2_data ?>"></p>
</div>