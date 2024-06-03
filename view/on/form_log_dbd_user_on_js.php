<script>
  // Récupération des éléments du DOM
  const information_user_login = document.getElementById("information_user_login"); 
  const information_user_password = document.getElementById("information_user_password"); 
  const form_1 = document.getElementById("form_1"); 
  const info_err = document.getElementById("info_err"); 

  // Fonction exécutée lors de la soumission des informations de connexion
  function information_user_btn(_this) {
    var ok = new Information("exe_on/php/sing_in_on/information_user_btn.php"); // Création de la classe 
    ok.add("information_user_login", information_user_login.value); // Ajout de l'information pour l'envoi 
    ok.add("information_user_password", information_user_password.value); // Ajout d'une deuxième information d'envoi  
    console.log(ok.info()); // Affichage des informations dans la console
    ok.push(); // Envoi des informations au code PHP 

    // Définition des délais pour exécuter la fonction d'actualisation des informations utilisateur
    const myTimeout = setTimeout(information_user_id_sha1_info, 250);
    const myTimeout2 = setTimeout(information_user_id_sha1_info, 500);
  }

  // Fonction pour actualiser les informations utilisateur
  function information_user_id_sha1_info() {
    Ajax("information_user_id_sha1_info", "view/data_user_srcon/information_user_id_sha1_info.php");
  }

  // Fonction pour recharger la page
  function information_user_id_sha1_info() {
    location.reload();
  }

  // Fonction exécutée lors du clic sur "Mot de passe oublié"
  function form_forgot_password_onclick() {
    //form_1.className = "display_none";

    Ajax("form_1", "view/on/form2.php");
    
    // Vérifie si le champ de login est vide et affiche un message d'erreur le cas échéant
    if (information_user_login.value.length == 0) {
      info_err.className = "info_err"; 
      info_err.style = "display:block"; 
    } else {
      info_err.style = "display:none"; 
    }
  }

  // Fonction de débogage pour afficher un message dans la console
  function data_user() {
    console.log("12345787"); 
  }
</script>
