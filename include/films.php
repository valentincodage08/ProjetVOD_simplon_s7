<!--CATALOGUE FILMS-->

<?php

include 'connexiondb.php';
//$req = $bdd->prepare(" SELECT id_film, titre, note, duree, genre, Film.id_affiche FROM Film INNER JOIN AfficheFilm ON Film.id_affiche = AfficheFilm.image");//
$req = $bdd->prepare(" SELECT id_film, titre, note, duree, genre, Film.id_affiche, image FROM Film, AfficheFilm");
          $req ->execute();

while( $donnees = $req->fetch() ) {

?>

<div class="axeldroite">
    <a href="<?php $_GET['id_film']?>" class="versfilm">
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
    </a>
</div>
</div>
<?php
} $req->closecursor();
?>