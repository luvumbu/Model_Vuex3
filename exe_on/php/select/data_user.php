<div class="card">
 <?php 
$liste_projet_admin_id_sha1_user_ = new DatabaseHandler($username, $password);

 if(give_url()!="index.php"){
  $info_sql = 'SELECT * FROM `liste_projet_admin`  WHERE `liste_projet_admin_id_sha1`="'.give_url().'" ORDER BY   `liste_projet_admin_id_sha1` ASC';

 }
 else {

  if(isset($_SESSION["information_user_id_sha1"])){
 
    $info_sql = 'SELECT * FROM `liste_projet_admin`  WHERE `liste_projet_admin_id_sha1`='.$_SESSION["information_user_id_sha1"].'';
  }
  else {
    $info_sql = 'SELECT * FROM `liste_projet_admin`  WHERE `liste_projet_admin_id`="1" ';

  }
  

 }

$liste_projet_admin_id_sha1_user_ ->getDataFromTable($info_sql, "liste_projet_admin_id_sha1_user");



 
 
  
  
 



  if(isset($_SESSION["information_user_id_sha1"])){
 
$information_user_id_sha1 = $_SESSION["information_user_id_sha1"] ; 
    
$info_sql = 'SELECT * FROM `information_user` WHERE   `information_user_id_sha1`  ="'.$information_user_id_sha1.'"';

 
 
 






  }
  else {

 
    $liste_projet_admin_id_sha1_user=$liste_projet_admin_id_sha1_user_->tableList_info[0] ; 
    $info_sql = 'SELECT * FROM `information_user` WHERE   `information_user_id_sha1`  ="'.$liste_projet_admin_id_sha1_user .'"';

 



 
  }

  $information_user_id_sha1_ = new DatabaseHandler($username, $password);
  $information_user_name_1_ = new DatabaseHandler($username, $password);
  $information_user_name_2_ = new DatabaseHandler($username, $password);
  $information_user_img_path_ = new DatabaseHandler($username, $password);
  
  $information_user_id_sha1_ ->getDataFromTable($info_sql, "information_user_id_sha1");
  $information_user_name_1_ ->getDataFromTable($info_sql, "information_user_name_1");
  $information_user_name_2_ ->getDataFromTable($info_sql, "information_user_name_2");
  $information_user_img_path_ ->getDataFromTable($info_sql, "information_user_img_path");
  


  var_dump($information_user_id_sha1_->tableList_info) ; 
  var_dump($information_user_name_1_ ->tableList_info) ; 
  
  var_dump($information_user_name_2_ ->tableList_info) ; 
  var_dump($information_user_img_path_->tableList_info) ; 

 


?>


      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <?php 


echo  $liste_projet_admin_id_sha1_user ; 

?>
    </div>