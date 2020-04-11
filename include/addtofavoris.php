<?php

session_start();
$idfilm = $_GET['id'];
$iduser = $_SESSION['id'];
include 'connexiondb.php';

$req = $bdd->prepare("INSERT INTO Favoris (id_user, id_film)
                      VALUES ( :id_user, :id_film)");
$req->execute(array(
    ':id_user' => $iduser,
    ':id_film' => $idfilm
));
$req->closecursor();
header("Location: ../detailsfilm.php?id=$idfilm&success=1");
?>