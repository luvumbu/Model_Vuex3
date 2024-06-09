<?php 
session_start();
header("Access-Control-Allow-Origin: *"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<?php 
 
require_once '../../../class/DatabaseHandler.php';
require_once '../../../class/config.php';
  

$file_path = $_SESSION["file_path"] ; 
$total = $_SESSION["total"] ; 


$time = $_SESSION["name"] ; 
 $information_user_id_sha1 = $_SESSION["information_user_id_sha1"] ;
 /*
 $information_user_name_1 = $_POST["information_user_name_1"]; 
$information_user_name_2 = $_POST["information_user_name_2"] ; 
*/
$databaseHandler01 = new DatabaseHandler($username ,$password);



 

$rename_ ='../src/img/'.$_SESSION["information_user_id_sha1"].'/'.$_SESSION["name"].'_'.$total; ; 
 




/*

$_SESSION["liste_projet_admin_id_sha1"] = $_POST["liste_projet_admin_id_sha1"] ; 


 
$_SESSION["id"] = $_POST["id"] ; 
*/




switch ($_SESSION["id"]) {
   case "data_user":
      $databaseHandler01->action_sql('UPDATE  `information_user` SET `information_user_img_name` = "'.$time.'",`information_user_img_extennsion` = "'.$total.'",`information_user_img_path` = "'.$file_path.'" ,`information_user_img_path_`="'.$rename_.'" WHERE  `information_user_id_sha1` = "'.$information_user_id_sha1.'"') ; 
//$time
     break;
   case "data_children":
      
      $liste_projet_admin_id_sha1 = $_SESSION["liste_projet_admin_id_sha1"] ;
      $file_path= $_SESSION["file_path"]  ; 
      $total= $_SESSION["total"] ;  
      $databaseHandler01->action_sql('UPDATE  `liste_projet_admin` SET `liste_projet_admin_img_name` = "'.$liste_projet_admin_id_sha1.'",`liste_projet_admin_img_extennsion` = "'.$_SESSION["file_path_2"].'",`liste_projet_admin_img_path` = "'.$file_path.'" ,`liste_projet_admin_img_path_` = "'.$rename_.'"  WHERE  `liste_projet_admin_id_sha1` = "'.$liste_projet_admin_id_sha1.'"') ; 
   

      // $liste_projet_admin_id_sha1
 break;


 case "data_social_media":
    
  $liste_projet_admin_id_sha1 = $_SESSION["liste_projet_admin_id_sha1"] ;
  $file_path= $_SESSION["file_path"]  ; 
  $total= $_SESSION["total"] ;  
  $databaseHandler01->action_sql('UPDATE  `social_media` SET `social_media_img_path` = "'.$file_path.'",`social_media_img_path_` = "'.$rename_.'"   WHERE  `social_media_id_sha1` = "'.$liste_projet_admin_id_sha1.'"') ; 

break;

   default:

 
 }


unset($_SESSION["name"]);

?>





<?php
// Fonction pour redimensionner l'image en conservant les proportions
function redimensionnerImage($source, $destination, $nouvelleLargeur, $nouvelleHauteur) {
    // Obtenir les dimensions originales et le type de l'image
    list($largeurOriginale, $hauteurOriginale, $type) = getimagesize($source);

    // Calculer le ratio de l'image originale
    $ratioOriginal = $largeurOriginale / $hauteurOriginale;
    $ratioNouveau = $nouvelleLargeur / $nouvelleHauteur;

    // Ajuster les dimensions pour conserver les proportions
    if ($ratioOriginal > $ratioNouveau) {
        // Image plus large, ajuster la hauteur
        $nouvelleHauteur = $nouvelleLargeur / $ratioOriginal;
    } else {
        // Image plus haute, ajuster la largeur
        $nouvelleLargeur = $nouvelleHauteur * $ratioOriginal;
    }

    // Créer une nouvelle image vide avec les dimensions ajustées
    $nouvelleImage = imagecreatetruecolor($nouvelleLargeur, $nouvelleHauteur);

    // Charger l'image source en fonction de son type
    switch ($type) {
        case IMAGETYPE_JPEG:
            $imageSource = imagecreatefromjpeg($source);
            break;
        case IMAGETYPE_PNG:
            $imageSource = imagecreatefrompng($source);
            // Conserver la transparence pour les PNG
            imagealphablending($nouvelleImage, false);
            imagesavealpha($nouvelleImage, true);
            break;
        case IMAGETYPE_GIF:
            $imageSource = imagecreatefromgif($source);
            break;
        default:
            echo "Type d'image non supporté.";
            return false;
    }

    // Redimensionner l'image
    imagecopyresampled($nouvelleImage, $imageSource, 0, 0, 0, 0, $nouvelleLargeur, $nouvelleHauteur, $largeurOriginale, $hauteurOriginale);

    // Sauvegarder l'image redimensionnée en fonction de son type
    switch ($type) {
        case IMAGETYPE_JPEG:
            imagejpeg($nouvelleImage, $destination, 100);
            break;
        case IMAGETYPE_PNG:
            imagepng($nouvelleImage, $destination);
            break;
        case IMAGETYPE_GIF:
            imagegif($nouvelleImage, $destination);
            break;
    }

    // Libérer la mémoire
    imagedestroy($imageSource);
    imagedestroy($nouvelleImage);

    return true;
}

// Chemin de l'image source



//$rename_
$imageSource =  "../../".$file_path;
 
echo "<br/>" ; 
echo "<br/>" ; 
echo "<br/>" ; 
echo "<br/>" ; 
echo "<br/>" ; 

// Chemin de l'image de destination
$imageDestination = "../../".$rename_;

// Nouvelle largeur et nouvelle hauteur souhaitées
$nouvelleLargeur = 800/2;  // Par exemple, 800 pixels de largeur
$nouvelleHauteur = 600/2;  // Par exemple, 600 pixels de hauteur

// Appeler la fonction pour redimensionner l'image
if (redimensionnerImage($imageSource, $imageDestination, $nouvelleLargeur, $nouvelleHauteur)) {
    echo "L'image a été redimensionnée avec succès!";
} else {
    echo "Une erreur est survenue lors du redimensionnement de l'image.";
}
?>



<script>
 window.location.href = "../../../index.php";
</script>


 <img class="grand_img" src="https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExZWVhY2s0aGcwOHNpMzA0amZseWh4YjRsbTU4bWw3MW83MTVoempvdyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/2j3oROgKTZOa4/giphy.webp" alt="">


 <style>
    .grand_img{
        width: 100%;
    }
 </style>
</body>
</html>