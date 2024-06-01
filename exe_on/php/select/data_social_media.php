<div class="card">
<?php 




 

 

$social_media_id = new DatabaseHandler($username, $password);
$social_media_id_user_sha1 = new DatabaseHandler($username, $password);
$social_media_img = new DatabaseHandler($username, $password);
$social_data = new DatabaseHandler($username, $password);
 
$info_sql = 'SELECT * FROM `social_media` WHERE `social_media_id` =1';




$info_sql = 'SELECT * FROM `social_media` WHERE `social_media_id_user_sha1` ='.$data_root.'';    


     $social_media_id ->getDataFromTable($info_sql, "social_media_id");
     $social_media_id_user_sha1 ->getDataFromTable($info_sql, "social_media_id_user_sha1");
     $social_media_img ->getDataFromTable($info_sql, "social_media_img");
     $social_data ->getDataFromTable($info_sql, "social_data");

     
 
     /*
var_dump($social_media_id->tableList_info ) ; 
 var_dump($social_media_id_user_sha1->tableList_info)  ; 

 var_dump($social_media_img->tableList_info)  ; 
 var_dump($social_data->tableList_info)  ; 
*/


//var_dump($social_media_id->tableList_info ) ; 

 
for($a = 0 ; $a <count($social_media_id->tableList_info) ; $a ++ ) {


echo '<input type="text">' ; 

echo '<div class="space_up"></div>';

      if($social_media_img->tableList_info[$a]==""){
            ?>

<img class="max_width"  src="data:image/jpeg;base64,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" alt="" srcset="">
<?php 
      }
      else
      {

echo '<img width="50" height="50" src="https://img.icons8.com/color/50/image.png"  class="cursor_pointer"alt="image"/>'    ;        
      }
      ?>

<img width="50" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png"  class="cursor_pointer"alt="delete-forever--v1"/>

<div class="space_top"></div>

<?php 
}


?>




<img width="50" height="50" src="https://img.icons8.com/cotton/50/plus--v3.png" alt="plus--v3"/>


</div>

<style>
      .space_top{
            margin-top: 50px; 
      }
      .max_width{
            max-width: 50px;
      }
      .space_up{
            margin-top: 25px;
      }
</style>

