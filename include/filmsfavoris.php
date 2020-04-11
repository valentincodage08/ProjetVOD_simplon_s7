<!--CATALOGUE FILMS--> 
<?php

include 'connexiondb.php';
$iduser = $_SESSION['id']; ?>
<h2 class="axeltitreh2">Vos films favoris</h2>
<div class="axeldroite">
    <?php 

    $req = $bdd->prepare(" SELECT * FROM Film, AfficheFilm, Favoris WHERE Favoris.id_user = $iduser AND Favoris.id_film = Film.id_film AND Film.id_affiche = AfficheFilm.id_affiche");
    $req ->execute();

    while( $donnees = $req->fetch() ) { ?>

    <a href="detailsfilm.php?id=<?= $donnees['id_film'];?>" class="versfilm">
        <div class="cardaxel"> <img class="poster-img" src="<?= $donnees['image']; ?>" alt="">
            <div class="titrefilm"><?= $donnees['titre']; ?></div>
            <div class="infoaxel">
                <div class="textaxel">
                    <p><?= $donnees['note']; ?>/5</p>
                    <p><?= $donnees['duree']; ?></p>
                    <p><?= $donnees['genre']; ?></p>
                </div>
            </div>
        </div>
        <?php } $req->closecursor(); ?>
    </a>
</div>
