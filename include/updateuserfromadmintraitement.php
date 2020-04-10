<?php
session_start();
include 'connexiondb.php';

$userid = $_GET['id'];

$username = !empty($_POST['username']) ? $_POST['username'] : NULL;
$nom = !empty($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = !empty($_POST['prenom']) ? $_POST['prenom'] : NULL;
$adresse = !empty($_POST['adresse']) ? $_POST['adresse'] : NULL;

$req = $bdd->prepare(" UPDATE User SET username = '$username', nom = '$nom', prenom = '$prenom', adresse = '$adresse' WHERE id_user = $userid");
        $req->execute();

          $req->closecursor();
          header('Location: tabadmin.php');
?>