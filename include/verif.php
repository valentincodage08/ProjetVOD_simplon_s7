<?php

include 'connexiondb.php';

$username = !empty($_POST['username']) ? $_POST['username'] : NULL;
$password = !empty($_POST['password']) ? $_POST['password'] : NULL;

    //  Récupération de l'utilisateur et de son pass hashé
    $req = $bdd->prepare("SELECT * FROM User WHERE username = :username");
    $req->execute(array(

        'username' => $username));

    $resultat = $req->fetch();

        if (isset($resultat['username'])) {

            if ($resultat['password']==$password) {

                if ($resultat['idusertype'] == 0){

                    session_start();
                    $_SESSION['username'] = $username;
                    header('location: ../index.php');
                }
                else {

                    session_start();
                    $_SESSION['username'] = $username;
                    header('location: tabadmin.php');
                    // Admin à rediriger après sur interface admin

                }
                
            }
            else {
                echo "Mot de passe erroné";
                echo "<a href='../connexion.php'>Retour à l'interface de connexion</a>";
            }

        }else {

            echo "Votre mail n'est pas enregistré";
            echo "<a href='../connexion.php'>Retour à l'interface de connexion</a>";

        }

?>