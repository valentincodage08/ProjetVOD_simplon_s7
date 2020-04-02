<?php

include 'connexiondb.php';

$userid = $_GET['id'];

echo "l'id utilis est $userid";

$req = $bdd->prepare(" DELETE FROM User WHERE id_user = $userid");
          $req ->execute();

          $req->closecursor();
          ?>