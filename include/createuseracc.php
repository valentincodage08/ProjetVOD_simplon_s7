<?php

include 'connexiondb.php';

$username = !empty($_POST['username']) ? $_POST['username'] : NULL;
$password = !empty($_POST['password']) ? $_POST['password'] : NULL;
$nom = !empty($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = !empty($_POST['prenom']) ? $_POST['prenom'] : NULL;
$adresse = !empty($_POST['adresse']) ? $_POST['adresse'] : NULL;

$req = $bdd->prepare("INSERT INTO User (username, password, nom, prenom, adresse, idusertype)
                                  VALUES ( :username, :password, :nom, :prenom, :adresse, 0)");
$req->execute(array(
    ':username' => $username,
    ':password' => $password,
    ':nom' => $nom,
    ':prenom' => $prenom,
    ':adresse' => $adresse
));
$req->closecursor();

header('Location: ../index.php');

?>