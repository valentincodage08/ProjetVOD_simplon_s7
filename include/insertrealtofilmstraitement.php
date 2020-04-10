<?php

include 'connexiondb.php';
$idfilm = $_GET['id'];
$nom = !empty($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = !empty($_POST['prenom']) ? $_POST['prenom'] : NULL;
$photo = !empty($_POST['photo']) ? $_POST['photo'] : NULL;
$description = !empty($_POST['description']) ? $_POST['description'] : NULL;

$req = $bdd->prepare("INSERT INTO Realisateur(nom, prenom, photo, description)
                      VALUES ( :nom, :prenom, :photo, :description)");
$req->execute(array(
    ':nom' => $nom,
    ':prenom' => $prenom,
    ':photo' => $photo,
    ':description' => $description,
));
$req->closecursor();

$realid = $bdd->lastInsertId();

$reqrealise = $bdd->prepare("INSERT INTO Realise(realisateur_id, id_film)
                          VALUES ( :realisateur_id, :id_film)");
$reqrealise->execute(array(
    ':realisateur_id' => $realid,
    ':id_film' => $idfilm
));
$reqrealise->closecursor();

header("Location: insertrealtofilms.php?id=$idfilm");

?>