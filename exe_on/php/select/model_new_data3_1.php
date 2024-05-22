<?php


 
for ($a = 0; $a < count($liste_projet_admin_id_sha1_->tableList_info); $a++) {

    $img_src =  str_replace("", "", $liste_projet_admin_img_path_->tableList_info[$a]);
    $_liste_projet_admin_name1 =  $liste_projet_admin_name1_->tableList_info[$a];
    $_liste_projet_admin_name2 =  $liste_projet_admin_name2_->tableList_info[$a];
    $_liste_projet_admin_id_sha1_ = $liste_projet_admin_id_sha1_->tableList_info[$a];
 

    
?>
    <div class="card">
          <h2>
            <?php 
if($liste_projet_admin_insert_bool=="1"){
?>
 <input type="text" title="<?php echo $liste_projet_admin_id_sha1_->tableList_info[$a] ?>" id="<?php echo 'liste_projet_admin_name1_' . $liste_projet_admin_id_sha1_->tableList_info[$a] ?>" onkeyup="liste_projet_admin_key_up(this)" value="<?php echo $_liste_projet_admin_name1 ?>">

<?php
}
else{
echo  "<h1>".$_liste_projet_admin_name1."</h1>" ;
}
            ?>
          </h2>

          <?php 

if($liste_projet_admin_insert_bool=="1"){

    $onclick ="add_picture(this)";
    $img_src="https://cdn.icon-icons.com/icons2/912/PNG/512/add-picture_icon-icons.com_71785.png" ; 
}
    ?>
 
<div class="img_background_ cursor_pointer" id="<?php echo $_liste_projet_admin_id_sha1_ ?>" onclick="<?php echo  $onclick ?>" title="data_children">

                <img src="<?php echo  $img_src ?>" alt="" srcset="">
          </div>
<?php 
 

?>

          <!-- <h5>Title description, Sep 2, 2017</h5> -->


          <?php 
          if($liste_projet_admin_insert_bool=="1"){
?>
          <textarea title="<?php echo $liste_projet_admin_id_sha1_->tableList_info[$a] ?>" id="<?php echo 'liste_projet_admin_name2_' . $liste_projet_admin_id_sha1_->tableList_info[$a] ?>" onkeyup="liste_projet_admin_key_up(this)" value="<?php echo "" ?>">
          <?php echo "<h3>".$_liste_projet_admin_name2."</h3>" ?>
</textarea>
<?php 
          }
          else {

          echo "<h1>".$_liste_projet_admin_name2."</h1>"   ; 
          }

          ?>

<?php 
if($liste_projet_admin_insert_bool =="1"){
?>
          <img width="50" onclick="remove_block(this)" title="<?php echo $liste_projet_admin_id_sha1_->tableList_info[$a] ?>" class="remove_block cursor_pointer" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1" />

<?php 
}
?>
    </div>
    
    <?php 
if($plus_element__t==0){


 

    if($liste_projet_admin_insert_bool=="1"){
    
      ?>

<img class="plus_element cursor_pointer" title="<?php echo $liste_projet_admin_id_sha1 ?>" onclick="data_parent_plus(this)" width="50" height="50" src="https://img.icons8.com/color/50/add--v1.png" alt="add--v1" />

<?php 
    }
       
    ?>

    <?php 
}

 
}



?>

 