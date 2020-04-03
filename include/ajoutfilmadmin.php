<?php

include 'connexiondb.php';

$titre = !empty($_POST['titre']) ? $_POST['titre'] : NULL;
$synopsis = !empty($_POST['synopsis']) ? $_POST['synopsis'] : NULL;
$genre = !empty($_POST['genre']) ? $_POST['genre'] : NULL;
$note = !empty($_POST['note']) ? $_POST['note'] : NULL;
$duree = !empty($_POST['duree']) ? $_POST['duree'] : NULL;
$image = !empty($_POST['image']) ? $_POST['image'] : NULL;

$reqimg = $bdd->prepare("INSERT INTO AfficheFilm (image)
                            VALUES ( '$image' )");
$reqimg->execute();
$reqimg->closecursor();

$last_id = $bdd->lastInsertId();

echo $last_id;

$reqfilm = $bdd->prepare("INSERT INTO Film (titre, synopsis, genre, note, duree, id_affiche)
                                  VALUES ( :titre, :synopsis, :genre, :note, :duree, :id_affiche)");
$reqfilm->execute(array(
    ':titre' => $titre,
    ':synopsis' => $synopsis,
    ':genre' => $genre,
    ':note' => $note,
    ':duree' => $duree,
    ':id_affiche' => $last_id
));
$reqfilm->closecursor();
header('Location: include/tabadmin.php');
?>