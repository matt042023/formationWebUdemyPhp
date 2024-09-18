<?php
echo "Merci, bien recu ! <br>";
$nom = strip_tags($_POST["nom"]); // strp_tags permet de nettoyer les données envoyé par l'utilisateur, ce qui permet de annuler l'envoie de code malveillant. ----- $POST["nom"] recupere a valeur du champ nom
$message = strip_tags($_POST["msg"]);
if ($nom != "") {
    echo "nom = " . $nom;
    echo '<br><a href="index.php">Retour</a>';
    //mail('matt.lheureux@hotmail.fr', 'Mon sujet', $message);
}

?>