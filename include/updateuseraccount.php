<?php

include 'connexiondb.php';

$userid = $_GET['id'];

$username = $_POST['username'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];

$req = $bdd->prepare(" UPDATE User SET username = '$username', nom = '$nom', prenom = '$prenom', adresse = '$adresse' WHERE id_user = $userid");
        $req->execute();

          $req->closecursor();
?>