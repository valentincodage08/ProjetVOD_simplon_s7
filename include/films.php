<!--CATALOGUE FILMS-->

<?php include 'connexiondb.php'; ?>

<div class="axeldroite">
<?php $req = $bdd->prepare(" SELECT * FROM Film, AfficheFilm WHERE Film.id_affiche = AfficheFilm.id_affiche");
          $req ->execute();

while( $donnees = $req->fetch() ) {

?>
    <a href="parasite.php?id=<?= $donnees['id_film'];?>" class="versfilm">
        <div class="cardaxel">
            <img class="poster-img" src="<?= $donnees['image']; ?>" alt="">
            <div class="titrefilm"><?= $donnees['titre']; ?></div>
            <div class="infoaxel">
                <div class="textaxel">
                    <p><?= $donnees['note']; ?>/5</p>
                    <p><?= $donnees['duree']; ?></p>
                    <p><?= $donnees['genre']; ?></p>
                </div>
            </div>
        </div>
<?php
} $req->closecursor();
?>
    </a>
</div>
</div>