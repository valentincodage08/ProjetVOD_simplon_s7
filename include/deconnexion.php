<?php 
session_start();

$_SESSION = array();
session_destroy();

echo "Vous êtes à présent déconnecté.";
echo "<a href='../index.php'>Retour à l'accueil</a>";
    
header("location:../index.php");

?>