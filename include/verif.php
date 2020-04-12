<?php
session_start();
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
                    $_SESSION['prenom'] = $resultat['prenom'];
                    $_SESSION['type'] = $resultat['idusertype'];
                    $_SESSION['id'] = $resultat['id_user'];
                    header('location: ../index.php');
                }
                else {

                    session_start();
                    $_SESSION['prenom'] = $resultat['prenom'];
                    $_SESSION['type'] = $resultat['idusertype'];
                    header('location: tabadmin.php');
                }
                
            }
            else {
                header('location: ../connexion.php?success=1');
            }

        }else {
            header('location: ../connexion.php?success=1');
        }

?>