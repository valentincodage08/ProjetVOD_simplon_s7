<?php
session_start();
include 'connexiondb.php';

$searchfilm = $_GET['search'];

echo $searchfilm;

$req = $bdd->prepare(" SELECT * FROM Film Where titre = '$searchfilm'");
$req->execute();

echo ['id_film'];
echo 'titre';
$req->closecursor;

echo 'id_film';
echo 'titre';

//header('Location: searchfilmsshow.php');

?>