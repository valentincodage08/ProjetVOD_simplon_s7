<?php
session_start();
include 'connexiondb.php';

$userid = $_GET['id'];

$req = $bdd->prepare(" DELETE FROM User WHERE id_user = $userid");
          $req ->execute();

          $req->closecursor();

$reqfav = $bdd->prepare(" DELETE FROM Favoris WHERE id_user = $userid");
          $reqfav ->execute();

          $reqfav->closecursor();
          header('Location: tabadmin.php?success=2');
?>