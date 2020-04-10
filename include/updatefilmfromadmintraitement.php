<?php
session_start();
include 'connexiondb.php';

$afficheid = $_GET['id_aff'];
$filmid = $_GET['id'];

$titre = !empty($_POST['titre']) ? $_POST['titre'] : NULL;
$synopsis = !empty($_POST['synopsis']) ? $_POST['synopsis'] : NULL;
$genre = !empty($_POST['genre']) ? $_POST['genre'] : NULL;
$note = !empty($_POST['note']) ? $_POST['note'] : NULL;
$duree = !empty($_POST['duree']) ? $_POST['duree'] : NULL;
$ba = !empty($_POST['ba']) ? $_POST['ba'] : NULL;
$date_sortie = !empty($_POST['date_sortie']) ? $_POST['date_sortie'] : NULL;
$image = !empty($_POST['image']) ? $_POST['image'] : NULL;

$reqimg = $bdd->prepare(" UPDATE AfficheFilm SET image = '$image' WHERE id_affiche = $afficheid");
$reqimg->execute();

  $reqimg->closecursor();

$req = $bdd->prepare(" UPDATE Film SET titre = '$titre', synopsis = '$synopsis', genre = '$genre', note = '$note', duree = '$duree', ba = '$ba', date_sortie = '$date_sortie' WHERE id_film = $filmid");
        $req->execute();

          $req->closecursor();
          header('Location: tabadmin.php?success=2');
?>