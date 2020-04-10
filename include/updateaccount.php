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

$req = $bdd->prepare("SELECT username, nom, prenom, adresse FROM User WHERE id_user = $userid");
$req->execute();


  while ($donnees = $req->fetch())
{

?>

<h3 class="font-weight-light text-black-50 mt-4 mb-5">
    <center>Modifier l'utilisateur <?= $donnees['username'];?></center>
  </h3>

  <div class="container">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
      <?php 
        if(isset($_GET['success'])){
          if($_GET['success'] == '1') {?>
            <div class="alert alert-light" role="alert">
              Votre profil a bien été modifié.
            </div>
      <?php }} ?>
      <form id="contact" action="updateuseraccount.php?id=<?= $userid;?>" method="post">
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
            <input type="text" class="form-control mb-3" name="adresse" tabindex="4" value="<?= $donnees['adresse'];?>">
          </div>
          <center><button type="submit" class="btn btn-outline-secondary mb-3" value="submit">Modifier</button></center>
        </form>
          <a href="../index.php"><center><button class="btn btn-outline-secondary">Retour</button></center></a>
      </div>
    </div>
  </div>

  <?php } ?>

</body>
</html>