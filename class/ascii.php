<?php

function ascii_de_mot($mot) {
    $ascii = '';
    for ($i = 0; $i < strlen($mot); $i++) {
        $ascii .= ord($mot[$i]) . ' ';
    }
    return trim($ascii); // Supprime l'espace en trop à la fin
}


/*
// Exemple d'utilisation avec un mot
$liste_projet_admin_name1 = 'exemple';
$liste_projet_admin_name1_ascii = ascii_de_mot($liste_projet_admin_name1);
echo "Les codes ASCII du mot '$liste_projet_admin_name1' sont : $liste_projet_admin_name1_ascii\n";
*/





?>


<?php

function mot_de_ascii($ascii) {
    $mots = explode(' ', $ascii);
    $mot = '';
    foreach ($mots as $code) {
        $mot .= chr($code);
    }
    return $mot;
}

/*

// Exemple d'utilisation avec une chaîne de caractères ASCII
$ascii = '101 120 101 109 112 108 101'; // Correspond à 'exemple'
$mot_decode = mot_de_ascii($ascii);
echo "Le mot correspondant aux codes ASCII '$ascii' est : $mot_decode\n";
*/
?>

