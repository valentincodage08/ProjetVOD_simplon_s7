<?php

include 'connexiondb.php';

$idfilm = $_GET['id'];

$req = $bdd->prepare(" DELETE FROM Film WHERE id_film = $idfilm");
          $req ->execute();

          $req->closecursor();
          header('Location: tabadmin.php');
?>