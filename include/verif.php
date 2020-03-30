<?php

$username = !empty($_POST['username']) ? $_POST['username'] : NULL;
$password = !empty($_POST['password']) ? $_POST['password'] : NULL;

echo "au moins je suis la";


    echo "ok";
    echo $username;
    echo $password;

    //  Récupération de l'utilisateur et de son pass hashé
    $req = $bdd->prepare('SELECT username,password FROM user WHERE username = $username');
    $req->execute(array(
        'username' => $username));
    $resultat = $req->fetch();
    
    // Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);
    
    if (!$resultat)
    {
        echo 'Mauvais identifiant ou mot de passe !';
    }
    else
    {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['password'] = $resultat['password'];
            $_SESSION['username'] = $username;
            echo 'Vous êtes connecté !';
        }
        else {
            echo 'Mauvais identifiant ou mot de passe !';
        }
    }


?>