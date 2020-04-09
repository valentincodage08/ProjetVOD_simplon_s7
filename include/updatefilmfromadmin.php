<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php

include 'connexiondb.php';

$filmid = $_GET['id'];

$req = $bdd->prepare("SELECT * FROM Film, AfficheFilm WHERE id_film=$filmid AND AfficheFilm.id_affiche = Film.id_affiche");
        $req->execute();


          while ($donnees = $req->fetch())
{

?>

 
<h3 class="font-weight-light text-black-50 mt-4 mb-5">
    <center>Modifier le film <?= $donnees['titre'];?></center>
  </h3>

  <div class="container">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
        <form action="updatefilmfromadmintraitement.php?id=<?= $filmid;?>&id_aff=<?= $donnees['id_affiche'];?>" method="post">
          <div class="form-group">
            <label>Titre du film</label>
            <input type="text" class="form-control" name="titre" tabindex="1" autofocus value="<?= $donnees['titre'];?>">
          </div>
          <div class="form-group">
            <label>Synopsis</label>
            <input type="text" class="form-control" name="synopsis" tabindex="2" value="<?= $donnees['synopsis'];?>">
          </div>
          <div class="form-group">
            <label>Genre</label>
            <input type="text" class="form-control" name="genre" tabindex="3" value="<?= $donnees['genre'];?>">
          </div>
          <div class="form-group">
            <label>Note</label>
            <input type="text" class="form-control" name="note" tabindex="4" value="<?= $donnees['note'];?>">
          </div>
          <div class="form-group">
            <label>Duree</label>
            <input type="time" min="00:00" class="form-control" name="duree" tabindex="5" value="<?= $donnees['duree'];?>">
          </div>
          <div class="form-group">
            <label>Bande-annonce</label>
            <input type="text" class="form-control" name="ba" tabindex="6" value="<?= $donnees['ba'];?>">
          </div>
          <div class="form-group">
            <label>Date de sortie</label>
            <input type="text" class="form-control" name="date_sortie" tabindex="7" value="<?= $donnees['date_sortie'];?>">
          </div>
          <div class="form-group">
            <label>URL de l'affiche du film</label>
            <input type="text" class="form-control" name="image" tabindex="8" value="<?= $donnees['image'];?>">
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