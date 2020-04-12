<?php
session_start();
include 'connexiondb.php';

$iduser = $_SESSION['id'];
$filtre = $_GET['filtre'];?>

<h2 class="axeltitreh2">Votre recherche pour le genre <?= $filtre ?></h2>
<div class="axeldroite">

<?php $reqsearch = $bdd->prepare(" SELECT * FROM Film, AfficheFilm WHERE Film.id_affiche = AfficheFilm.id_affiche AND Film.genre = '$filtre'");
    $reqsearch -> execute();

    while( $donnees = $reqsearch->fetch() ) {?>

        <a href="detailsfilm.php?id=<?= $donnees['id_film'];?>" class="versfilm">
            <div class="cardaxel"> <img class="poster-img" src="<?= $donnees['image']; ?>" alt="">
                <div class="titrefilm"><?= $donnees['titre']; ?></div>
                <div class="infoaxel">
                    <div class="textaxel">
                        <p><?= $donnees['note']; ?>/5</i></p>
                        <p><?= $donnees['duree']; ?></p>
                        <p><?= $donnees['genre']; ?></p>
                    </div>
                </div>
            </div>
    <?php } $reqsearch->closecursor()?>
        </a>
</div>