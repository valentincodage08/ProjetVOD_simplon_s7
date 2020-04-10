<?php
session_start();
include 'connexiondb.php';
$idfilm = $_GET['id'];
$nom = !empty($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = !empty($_POST['prenom']) ? $_POST['prenom'] : NULL;
$photo = !empty($_POST['photo']) ? $_POST['photo'] : NULL;

$req = $bdd->prepare("INSERT INTO Acteur(nom, prenom, photo)
                      VALUES ( :nom, :prenom, :photo)");
$req->execute(array(
    ':nom' => $nom,
    ':prenom' => $prenom,
    ':photo' => $photo
));
$req->closecursor();

$acteurid = $bdd->lastInsertId();

$reqjoue = $bdd->prepare("INSERT INTO joue(id_film, id_acteur)
                          VALUES ( :id_film, :id_acteur)");
$reqjoue->execute(array(
':id_film' => $idfilm,
':id_acteur' => $acteurid
));
$reqjoue->closecursor();

header("Location: insertacteurstofilms.php?id=$idfilm");

?>