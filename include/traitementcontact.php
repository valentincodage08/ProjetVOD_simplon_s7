<?php
session_start();
    $nom = $_POST['name'];
    $prenom = $_POST['firstname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $destinataire = "valentin_mg08@hotmail.fr";
    $sujet = "Si j'suis là c'est que ça marche";

    mail($destinataire, $sujet, $message);
    header('Location: ../index.php?success=1');
    exit;

    ?>