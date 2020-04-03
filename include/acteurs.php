<div class="acteurs-titre">Acteurs</div>
<section class="liste-acteurs">
<!--Liste acteurs-->
<?php 

include 'connexiondb.php';

$req=$bdd->prepare("SELECT a.photo, a.nom, a.prenom, a.id_acteur, j.id_acteur, j.id_film FROM Acteur a, joue j WHERE j.id_film = $idfilm AND a.id_acteur = j.id_acteur");
$req->execute(); 

while( $donnees = $req->fetch() ) { ?>


    <div class="acteur">
        <img class="img-acteur" src="<?= $donnees['photo'];?>" alt="">
        <div><?= $donnees['prenom'];?> <?= $donnees['nom'];?></div>
    </div>
<?php 
} ?>
</section>