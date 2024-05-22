<div class="card text-center max_height" id="data_popular">
 
<?php

 



/*


$liste_projet_admin_id_ = new DatabaseHandler($username ,$password);   
$liste_projet_admin_id_sha1_ = new DatabaseHandler($username ,$password);     
$liste_projet_admin_id_sha1_user_ = new DatabaseHandler($username ,$password);     
$liste_projet_admin_name1_ = new DatabaseHandler($username ,$password);     
$liste_projet_admin_name2_ = new DatabaseHandler($username ,$password); 
$liste_projet_admin_img_path_ =new DatabaseHandler($username ,$password); 

$bool__ =false ; 

if(!isset($_SESSION["information_user_id_sha1"])){     
$info_sql ='SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_sha1_parent` =""  ' ; 
  
}
else {
$info_sql ='SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1_user`="'.$information_user_id_sha1.'" AND `liste_projet_admin_sha1_parent` =""  ' ; 
$bool__ = true ; 
}



*/ 










 


     
      
      

   
      if(give_url()=="index.php"){
        $information_user_img_path_ =    str_replace("../","", $information_user_img_path___) ; 
        
      }
      else {
        $information_user_img_path_ =    str_replace("","", $information_user_img_path___) ; 

      }

     

      
 ?>
 <div class="information_user_name_1" id="information_user_name_1_01">
  <h1>
      <?php  echo $information_user_name_1->tableList_info[0] ?>
  </h1>

 </div>

 <div class="information_user_img_path">  
  <img src="<?php echo $information_user_img_path_ ?>" alt="" srcset="">
 </div>
 <div class="information_user_name_2" id="information_user_name_2_01">

  <h3>
      <?php  echo $information_user_name_2->tableList_info[0] ?>
  </h3>
 </div>

 

</div>
<style>
.information_user_img_path img {
  width: 200px;
}
.information_user_name_2{
  text-align: justify;
  margin-top: 50px;
}
.information_user_name_1{
  margin-bottom: 50px;
 

}
</style>