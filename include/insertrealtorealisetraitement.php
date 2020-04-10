<?php 

include 'connexiondb.php';

$idfilm = $_GET['id'];
$real = $_POST['real'];

$req = $bdd->prepare("INSERT INTO Realise(realisateur_id, id_film)
                      VALUES ( :realisateur_id, :id_film)");
$req->execute(array(
    ':realisateur_id' => $real,
    ':id_film' => $idfilm
));
$req->closecursor();

header("Location: insertrealtofilms.php?id=$idfilm");

?>