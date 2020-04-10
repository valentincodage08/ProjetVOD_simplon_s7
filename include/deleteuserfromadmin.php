<?php
session_start();
include 'connexiondb.php';

$userid = $_GET['id'];

$req = $bdd->prepare(" DELETE FROM User WHERE id_user = $userid");
          $req ->execute();

          $req->closecursor();
          header('Location: tabadmin.php');
?>