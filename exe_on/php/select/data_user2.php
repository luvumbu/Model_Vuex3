<div class="card text-center max_height" id="data_popular">
 

<?php
 
 
     $information_user_name_1 = new DatabaseHandler($username ,$password);   
      $information_user_name_2 = new DatabaseHandler($username ,$password);     
      $information_user_img_path = new DatabaseHandler($username ,$password);     
 

      $info_sql ='SELECT * FROM `information_user` WHERE 1 LIMIT 1 ' ; 
      
      
      $information_user_name_1->getDataFromTable($info_sql,"information_user_name_1");
      $information_user_name_2->getDataFromTable($info_sql,"information_user_name_2");
      $information_user_img_path->getDataFromTable($info_sql,"information_user_img_path");
 
      
      $information_user_img_path_ =    str_replace("../","", $information_user_img_path->tableList_info[0]) ; 

   
      
      
 ?>
 <div class="information_user_name_1">
  <h1>
      <?php  echo $information_user_name_1->tableList_info[0] ?>
  </h1>

 </div>

 <div class="information_user_img_path">  
  <img src="<?php echo $information_user_img_path_ ?>" alt="" srcset="">
 </div>
 <div class="information_user_name_2">

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