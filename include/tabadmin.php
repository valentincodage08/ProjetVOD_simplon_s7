<?php 
session_start();
  if ($_SESSION['type'] == 1) {
include 'connexiondb.php'; 
?>

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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">




  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--FOTORAMA-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>


  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>


</head>

<body class="bg-light">
  <h1 class="text-center font-weight-light font-italic text-black-50 mt-4 mb-5">Bienvenue dans votre interface
    Administrateur</h1>
    <center><a href="../index.php" class="text-black-50 mb-5">Revenir à l'accueil</a></center>
    <h3 class="font-weight-light text-black-50 mt-4 mb-5">
    <center>Utilisateurs</center>
  </h3>
  <div class="container mt-2">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nom utilisateur</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Adresse</th>
          <th scope="col">Modifier</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>


        <?php
$req = $bdd->prepare("SELECT * FROM User");
    $req->execute();

    while ($donnees = $req->fetch())
{ ?>
        <tr>
          <th scope="row"><?= $donnees['id_user']; ?></th>
          <td><?= $donnees['username']; ?></td>
          <td><?= $donnees['nom']; ?></td>
          <td><?= $donnees['prenom']; ?></td>
          <td><?= $donnees['adresse']; ?></td>
          <td><a href="updateuserfromadmin.php?id=<?= $donnees['id_user'];?>" class="text-muted"><i
                class="fas fa-user-edit"></i></a></td>
          <td><a href="deleteuserfromadmin.php?id=<?= $donnees['id_user'];?>" class="text-muted"><i
                class="fas fa-trash-alt"></i></a></td>
        </tr>
        <?php
}
$req->closecursor();
?>
      </tbody>
    </table>
  </div>

  <h3 class="font-weight-light text-black-50 mt-4 mb-5">
    <center>Films</center>
  </h3>
  <div class="container mt-2">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Titre</th>
          <th scope="col">Genre</th>
          <th scope="col">Note</th>
          <th scope="col">Duree</th>
          <th scope="col">Date de sortie</th>
          <th scope="col">Modifier</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>


        <?php
$req = $bdd->prepare("SELECT * FROM Film, AfficheFilm WHERE Film.id_affiche = AfficheFilm.id_affiche");
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
          <td><a href="updatefilmfromadmin.php?id=<?= $donnees['id_film'];?>" class="text-muted"><i
                class="fas fa-user-edit"></i></a></td>
          <td><a href="deletefilmfromadmin.php?id=<?= $donnees['id_film'];?>" class="text-muted"><i
                class="fas fa-trash-alt"></i></a></td>
        </tr>
        <?php
}
$req->closecursor();
?>
      </tbody>
    </table>
  </div>
  <h3 class="font-weight-light text-black-50 mt-4 mb-5">
    <center>Ajouter un film</center>
  </h3>

  <div class="container">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
        <form action="ajoutfilmadmin.php" method="post">
          <div class="form-group">
            <label>Titre</label>
            <input type="text" class="form-control" name="titre" tabindex="1" required>
          </div>
          <div class="form-group">
            <label>Synopsis</label>
            <input type="text" class="form-control" name="synopsis" tabindex="2" required>
          </div>
          <div class="form-group">
            <label>Genre</label>
            <input type="text" class="form-control" name="genre" tabindex="3" required>
          </div>
          <div class="form-group">
            <label>Note</label>
            <input type="text" class="form-control" name="note" tabindex="4" required>
          </div>
          <div class="form-group">
            <label>Durée</label>
            <input type="time" class="form-control" name="duree" min="00:00" tabindex="5" required>
          </div>
          <div class="form-group">
            <label>URL de l'Affiche du film</label>
            <input type="text" class="form-control" name="image" tabindex="6" required>
          </div>
          <div class="form-group">
            <label>Lien de la bande-annonce YouTube</label>
            <input type="text" class="form-control" name="ba" tabindex="7" required>
          </div>
          <div class="form-group">
            <label>Date de sortie</label>
            <input type="text" class="form-control" name="date_sortie" tabindex="8" required>
          </div>
          <center><button type="submit" class="btn btn-outline-secondary mb-5" value="submit">Valider</button></center>
      </div>
    </div>
  </div>
</body>

</html>

<?php }
else {
  header('Location: ../index.php');
} ?>