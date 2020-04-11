<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="bg-light">

<?php
session_start();
include 'connexiondb.php';

$userid = $_GET['id'];

$req = $bdd->prepare("SELECT * FROM User WHERE id_user=$userid");
        $req->execute();


          while ($donnees = $req->fetch())
{

?>

 
<h3 class="font-weight-light text-black-50 mt-4 mb-5">
    <center>Modifier le profil de l'utilisateur n° <?= $userid ?> : <?= $donnees['username'];?></center>
  </h3>

  <div class="container">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
        <form action="updateuserfromadmintraitement.php?id=<?= $userid;?>" method="post">
          <div class="form-group">
            <label>Nom d'utilisateur</label>
            <input type="text" class="form-control" name="username" tabindex="1" autofocus value="<?= $donnees['username'];?>">
          </div>
          <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control" name="nom" tabindex="2" value="<?= $donnees['nom'];?>">
          </div>
          <div class="form-group">
            <label>Prénom</label>
            <input type="text" class="form-control" name="prenom" tabindex="3" value="<?= $donnees['prenom'];?>">
          </div>
          <div class="form-group">
            <label>Adresse</label>
            <input type="text" class="form-control" name="adresse" tabindex="4" value="<?= $donnees['adresse'];?>">
          </div>
          <center><button type="submit" class="btn btn-outline-secondary mb-5" value="submit">Modifier</button></center>
        </form>
      </div>
    </div>
  </div>

<?php
}
?>

<h3 class="font-weight-light text-black-50 mt-4 mb-5">
    <center>Ses films favoris</center>
  </h3>

  <div class="container mt-2">
  <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Titre</th>
          <th scope="col">Genre</th>
          <th scope="col">Note</th>
          <th scope="col">Durée</th>
          <th scope="col">Date de sortie</th>
        </tr>
      </thead>
      <tbody>


        <?php
    $req = $bdd->prepare("SELECT * FROM Film, Favoris WHERE Favoris.id_user = $userid AND Favoris.id_film = Film.id_film");
    $req->execute();

    while ($donnees = $req->fetch())
{ ?>
        <tr>
          <th scope="row"><?= $donnees['id_film']; ?></th>
          <td><?= $donnees['titre']; ?></td>
          <td><?= $donnees['genre']; ?></td>
          <td><?= $donnees['note']; ?></td>
          <td><?= $donnees['duree']; ?></td>
          <td><?= $donnees['date_sortie']; ?></td>
        </tr>
        <?php
}
$req->closecursor();
?>
      </tbody>
    </table>
  </div>
  <center><a href="tabadmin.php"><button class="btn btn-outline-secondary mt-2 mb-2">Retour</button></a></center>

</body>
</html>