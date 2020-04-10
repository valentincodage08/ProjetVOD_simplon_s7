<?php 
session_start();
include 'connexiondb.php';

$idfilm = $_GET['id'];
$act = $_POST['act'];

$req = $bdd->prepare("INSERT INTO joue(id_film, id_acteur)
                      VALUES ( :id_film, :id_acteur)");
$req->execute(array(
    ':id_film' => $idfilm,
    ':id_acteur' => $act
));
$req->closecursor();

header("Location: insertacteurstofilms.php?id=$idfilm");

?>