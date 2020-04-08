<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php

include 'connexiondb.php';

$userid = $_GET['id'];

$req = $bdd->prepare("SELECT * FROM User WHERE id_user=$userid");
        $req->execute();


          while ($donnees = $req->fetch())
{

?>

 
<h3 class="font-weight-light text-black-50 mt-4 mb-5">
    <center>Modifier le profil de l'utilisateur <?= $donnees['username'];?></center>
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

</body>
</html>