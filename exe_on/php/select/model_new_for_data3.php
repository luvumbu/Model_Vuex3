<?php 


 
    if($presentation2_index_php){
        $img_src =  str_replace("../", "", $liste_projet_admin_img_path_->tableList_info[$a]);

    }
    else {
    


    if(give_url()=="index.php"){
        $img_src =  str_replace("../", "", $liste_projet_admin_img_path_->tableList_info[$a]);
    }
    else {
        $img_src =  str_replace("", "", $liste_projet_admin_img_path_->tableList_info[$a]);

    }

    }
    $_liste_projet_admin_name1 =  $liste_projet_admin_name1_->tableList_info[$a];
    $_liste_projet_admin_name2 =  $liste_projet_admin_name2_->tableList_info[$a];
    $_liste_projet_admin_id_sha1_ = $liste_projet_admin_id_sha1_->tableList_info[$a];
    $_information_user_reg_date_ = $information_user_reg_date_>$tableList_info[$a];


 
  $information_user_reg_date__ = new Get_anne($information_user_reg_date_->tableList_info[$a] );

  $_information_user_reg_date__="Posté le : ".$information_user_reg_date__->get_jour().'/'.$information_user_reg_date__->get_mois().'/'.$information_user_reg_date__->get_anne() ; 
    
  $_information_user_reg_date__ =   $_information_user_reg_date__." a ". $information_user_reg_date__->get_heure_complet() ;
 


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
echo  "<h3>".$_liste_projet_admin_name1."<h3>" ;
}


 

            ?>

           
          </h2>
 
          <?php 
 

if($liste_projet_admin_insert_bool=="1"){

    $onclick ="add_picture(this)";
}
else {
    $onclick ="add_picture2(this)";

}
    ?>
 
<div class="<?php echo $img_background ?>" id="<?php echo $_liste_projet_admin_id_sha1_ ?>" onclick="<?php echo  $onclick ?>" title="data_children">
                <img src="<?php echo  $img_src ?>" alt="" srcset="">
</div>
<div class="information_user_reg_date_">
    <?php 
    echo   $_information_user_reg_date__ ; 

    if($liste_projet_admin_insert_bool=="1"){

        $onclick ="add_picture(this)";
    }
        ?>
</div>
<div class="information_user_reg_date_2"></div>
<?php 
 

?>

          <!-- <h5>Title description, Sep 2, 2017</h5> -->


          <?php 
          if($liste_projet_admin_insert_bool=="1"){
?>
          <textarea title="<?php echo $liste_projet_admin_id_sha1_->tableList_info[$a] ?>" id="<?php echo 'liste_projet_admin_name2_' . $liste_projet_admin_id_sha1_->tableList_info[$a] ?>" onkeyup="liste_projet_admin_key_up(this)" value="<?php echo "" ?>">
          <?php echo  $_liste_projet_admin_name2  ?>
</textarea>
<?php 
          }
          else {
          echo "<h3>".$_liste_projet_admin_name2."</h3>"   ; 
          }

          ?>

<?php 
if($liste_projet_admin_insert_bool =="1"){
?>
          <img width="50" onclick="remove_block(this)" title="<?php echo $liste_projet_admin_id_sha1_->tableList_info[$a] ?>" class="remove_block cursor_pointer" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1" />

<!--
          <select class="form-select" aria-label="Default select example">
  <option selected>Style menu</option>
  <option value="1">css 1</option>
  <option value="2">css 2 </option>
  <option value="3">css 3</option>
</select>

<img width="50" height="50" src="https://img.icons8.com/officel/50/text-color.png" alt="text-color"/>
<img width="50" height="50" src="https://img.icons8.com/ios/50/align-left.png" alt="align-left"/>
<img width="50" height="50" src="https://img.icons8.com/ios/50/align-cell-content-center.png" alt="align-cell-content-center"/>

<img width="50" height="50" src="https://img.icons8.com/ios/50/align-right.png" alt="align-right"/>
-->
<?php
if($liste_projet_visibility_->tableList_info[$a]==""){

    $src_img ="https://img.icons8.com/ios/50/visible--v1.png" ;
 
}
else {
    $src_img ="https://img.icons8.com/pastel-glyph/50/invisible--v2.png" ;


}
echo '<img width="50" class="cursor_pointer" height="50"  onclick="id_src_visibility(this)" id="id_src_'.$liste_projet_admin_id_sha1_->tableList_info[$a].'" title="'.$liste_projet_admin_id_sha1_->tableList_info[$a].'" src="'.$src_img.'" alt="invisible--v2"/>' ; 
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

    $qr_src =  "src/img/qrcode_src/".$_liste_projet_admin_id_sha1_.".png" ; 
//$_liste_projet_admin_id_sha1_ 
?>

<div id="qr_code_img">
<img src="<?php echo $qr_src ?>" alt="" srcset="">
</div>

<style>
    .form-select{
        width: 100%;
    }
    #qr_code_img {
   
        text-align: center;
    }
</style>