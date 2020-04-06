<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALLO SIMPLON</title>

    <!--SLICK-->

    <link rel="stylesheet" type="text/css" href="slick\slick\slick.css" />
    <link rel="stylesheet" type="text/css" href="slick\slick\slick-theme.css" />




    <!--CSS-->

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" media="screen, projection" type="text/css" id="css" href="<?php echo $url; ?>" />


    <!--GOOGLE FONTS-->

    <link
        href="https://fonts.googleapis.com/css?family=Baloo+Tammudu+2:400,500,600,700,800|Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Asap:400,400i,500,500i,600,600i,700,700i|Bellota+Text:300,300i,400,400i,700,700i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron:700,800,900|Quicksand:300,400,500,600,700&display=swap"
        rel="stylesheet">







    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--FOTORAMA-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>


    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>


</head>

<body>
<table>
    <tr>
        <td>id </td>
        <td>Username </td>
        <td>Nom </td>
        <td>Prénom </td>
        <td>Adresse </td>
    </tr>


<?php

include 'connexiondb.php';

$req = $bdd->prepare("SELECT * FROM User");
    $req->execute();

    while ($donnees = $req->fetch())
{ ?>
    </tr>
        <td><?= $donnees['id_user']; ?> </td>
        <td><?= $donnees['username']; ?> </td>
        <td><?= $donnees['nom']; ?> </td>
        <td><?= $donnees['prenom']; ?> </td>
        <td><?= $donnees['adresse']; ?> </td>
        <td><a href="updateuserfromadmin.php?id=<?= $donnees['id_user'];?>">Modifier</a></td>
        <td><a href="deleteuserfromadmin.php?id=<?= $donnees['id_user'];?>">Supprimer</a></td>
    </tr>

<?php
}
$req->closecursor();
?>
</table>

<h3><center>Ajouter un film</center></h3>
<form action="ajoutfilmadmin.php" method="post">
    <fieldset>
      <input placeholder="Titre" name="titre" type="text" tabindex="1" autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Synopsis" name="synopsis" type="text" tabindex="2">
    </fieldset>
    <fieldset>
      <input placeholder="Genre" name="genre" type="text" tabindex="3">
    </fieldset>
    <fieldset>
      <input placeholder="Note" name="note" type="text" tabindex="4">
    </fieldset>
    <fieldset>
      <input  name="duree" type="time" min="00:00:00" tabindex="5">
    </fieldset>
    <fieldset>
    <input placeholder="Url de l'image du film" name="image" type="text" tabindex="6">
    </fieldset>
    <fieldset>
      <button type="submit" value="submit">Valider</button>
    </fieldset>
</form>

</body>
</html>