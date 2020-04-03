 <!--REAL BA-->

 <div class="real-real">Réalisateur</div>

<div class="real-ba">

<?php 

include 'connexiondb.php';

$req=$bdd->prepare("SELECT r.photo, r.nom, r.prenom, r.realisateur_id, r.description, rr.realisateur_id, rr.id_film FROM Realisateur r, Realise rr WHERE rr.id_film = $idfilm AND r.realisateur_id = rr.realisateur_id");
$req->execute(); 

while( $donnees = $req->fetch() ) { ?>
    

    <div class="real">
        <div class="img-real">
            <img src="<?= $donnees['photo'];?>" alt="">
            <div><?= $donnees['prenom'];?> <?= $donnees['nom'];?></div>
        </div>
        <div class="text-real">
        <?= $donnees['description'];?>
        </div>
    </div>

<?php } ?>

<?php 

$reqba = $bdd->prepare("SELECT ba FROM Film WHERE id_film = '$idfilm'");
$reqba->execute(); 

while( $donnees = $reqba->fetch() ) { ?>

    <div class="ba-yt">
        <iframe width="400" height="250" src="<?= $donnees['ba'];?>" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>
    <?php } ?>
</div>