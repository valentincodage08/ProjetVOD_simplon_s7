<?php
session_start();
include 'connexiondb.php';

$idfilm = $_GET['id'];

$reqj = $bdd->prepare(" DELETE FROM joue WHERE id_film = $idfilm");
$reqj ->execute();

$reqj->closecursor();


$reqr = $bdd->prepare(" DELETE FROM Realise WHERE id_film = $idfilm");
$reqr ->execute();

$reqr->closecursor();


$req = $bdd->prepare(" DELETE FROM Film WHERE id_film = $idfilm");
          $req ->execute();

          $req->closecursor();
          header('Location: tabadmin.php?success=4');
?>