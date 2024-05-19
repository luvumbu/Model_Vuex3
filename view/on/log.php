<?php
//echo $_SESSION["information_user_id_sha1"];
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    <?php
    require_once "log_css.php";
    require_once "exe_on/php/select/log_data.php";
    /*
exe_on/php/select/log_data:
    array_information_user_name_1
    array_information_user_img
    array_information_user_name_2
*/
    ?>
  </style>
</head>

<body>
  <div class="header">
    <h2>Blog Name</h2>
  </div>
  <div>
    <img onclick="destroy()" class="cursor_pointer" width="50" height="50" src="https://img.icons8.com/fluency-systems-regular/50/shutdown.png" alt="shutdown" />
    <img onclick="liste_projet_admin_insert()" width="50" id="add_projet" class="cursor_pointer" height="50" src="https://img.icons8.com/ios-filled/50/add--v1.png" alt="add--v1"/>
    <img onclick="all_liste_projet_admin()"  width="50" height="50" src="https://img.icons8.com/carbon-copy/50/all.png" alt="all"/>
  
  
  </div>


  <?php 
          if(isset($_SESSION["liste_projet_admin_insert"])){
        
            $information_user_id_sha1 = $_SESSION['liste_projet_admin_insert'] ; 


           
          } 

  ?>
  <div class="row row_element">
    <div class="leftcolumn">
        <?php
            require_once "exe_on/php/select/data_parent.php";
            require_once "exe_on/php/select/data_children.php";
        ?>
    </div>
    <div class="rightcolumn">
        <?php
          require_once "exe_on/php/select/data_user.php";
          require_once "exe_on/php/select/data_popular.php";
          require_once "exe_on/php/select/data_social_media.php";
        ?>
    </div>
  </div>
  <div class="footer">
    <h2>Footer</h2>
  </div>
</body>
</html>