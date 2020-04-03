<?php

include 'connexiondb.php';

$titre = !empty($_POST['titre']) ? $_POST['titre'] : NULL;
$synopsis = !empty($_POST['synopsis']) ? $_POST['synopsis'] : NULL;
$genre = !empty($_POST['genre']) ? $_POST['genre'] : NULL;
$note = !empty($_POST['note']) ? $_POST['note'] : NULL;
$duree = !empty($_POST['duree']) ? $_POST['duree'] : NULL;
// $image = !empty($_POST['image']) ? $_POST['image'] : NULL;

// Objectif : récup le nombre de lignes, add +1, et assigner chaque fois l'id de l'affiche à film et affichefilm à $iduserinsertion +1
$iduserinsertion = $bdd->prepare("INSERT INTO Film (titre, synopsis, genre, note, duree, id_affiche)
                                  VALUES ( :titre, :synopsis, :genre, :note, :duree, 3)");
$iduserinsertion->execute(array(
    ':titre' => $titre,
    ':synopsis' => $synopsis,
    ':genre' => $genre,
    ':note' => $note,
    ':duree' => $duree
));
$iduserinsertion->closecursor();



//$req = $bdd->prepare(" INSERT INTO Film (titre, synopsis, genre, note, duree)
//VALUES ( '$titre', '$synopsis', '$genre', '$note', '$suree')");
//          $req ->execute();
//$req->closecursor();

//$req2 = $bdd->prepare(" INSERT INTO AfficheFilm (image)
//VALUES ( '$image')");
//$req2 ->execute();
//$req2->closecursor();
?>