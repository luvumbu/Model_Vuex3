<?php

/*
$liste_projet_admin_id_ = new DatabaseHandler($username, $password);
$liste_projet_admin_id_sha1_ = new DatabaseHandler($username, $password);
$liste_projet_admin_id_sha1_user_ = new DatabaseHandler($username, $password);
$liste_projet_admin_name1_ = new DatabaseHandler($username, $password);
$liste_projet_admin_name2_ = new DatabaseHandler($username, $password);
$liste_projet_admin_img_path_ = new DatabaseHandler($username, $password);

*/



// partie ok  


 
// partie ok  


?>
<body>

 

<div class="row">
  <div class="leftcolumn">
 <?php 
 $liste_projet_admin_id_sha1__ = give_url()  ; 
require 'model_new_data1.php' ; 
$info_sql = 'SELECT * FROM `liste_projet_admin` WHERE  `liste_projet_admin_id_sha1` ="'.$liste_projet_admin_id_sha1__.'" ORDER BY  `liste_projet_admin_id` ASC ';

require 'model_new_data2.php' ; 
require 'model_new_data3_1.php' ; 

 


 
require 'model_new_data1.php' ; 
$info_sql = 'SELECT * FROM `liste_projet_admin` WHERE  `liste_projet_admin_sha1_parent` ="'.$liste_projet_admin_id_sha1__.'" ORDER BY  `liste_projet_admin_id` ASC ';
require 'model_new_data2.php' ; 
require 'model_new_data3_1.php' ; 
 
 
 ?>
  </div>
  <div class="rightcolumn">
<?php  
     //   require 'data_user2.php' ; 
       // require 'data_all2.php' ; 

?>
 
    <div class="card">
      <a href="../index.php">
        <h3><img width="50" height="50" src="https://img.icons8.com/ios/50/home--v1.png" alt="home--v1"/></h3>
      </a>
      
     
    </div>
  </div>
</div>

<div class="footer">
  <h2></h2>
</div>

</body>


 