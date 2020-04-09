<?php

include 'connexiondb.php';

$titre = !empty($_POST['titre']) ? $_POST['titre'] : NULL;
$synopsis = !empty($_POST['synopsis']) ? $_POST['synopsis'] : NULL;
$genre = !empty($_POST['genre']) ? $_POST['genre'] : NULL;
$note = !empty($_POST['note']) ? $_POST['note'] : NULL;
$duree = !empty($_POST['duree']) ? $_POST['duree'] : NULL;
$ba = !empty($_POST['ba']) ? $_POST['ba'] : NULL;
$date_sortie = !empty($_POST['date_sortie']) ? $_POST['date_sortie'] : NULL;
$image = !empty($_POST['image']) ? $_POST['image'] : NULL;

$reqimg = $bdd->prepare("INSERT INTO AfficheFilm (image)
                            VALUES ( '$image' )");
$reqimg->execute();
$reqimg->closecursor();

$last_id = $bdd->lastInsertId();

$reqfilm = $bdd->prepare("INSERT INTO Film (titre, synopsis, genre, note, duree, id_affiche, ba, date_sortie)
                                  VALUES ( :titre, :synopsis, :genre, :note, :duree, :id_affiche, :ba, :date_sortie)");
$reqfilm->execute(array(
    ':titre' => $titre,
    ':synopsis' => $synopsis,
    ':genre' => $genre,
    ':note' => $note,
    ':duree' => $duree,
    ':id_affiche' => $last_id,
    ':ba' => $ba,
    ':date_sortie' => $date_sortie
));
$reqfilm->closecursor();
header("Location: insertacteurstofilms.php");
?>