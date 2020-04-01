 <!--AFFICHE-->
<?php 
include 'include/connexiondb.php';
?>
 <div class="title-dada-affiche">
    <h2>A l'affiche</h2>
</div>

<div class="center slider">

    <?php $req = $bdd->prepare(" SELECT id_film, image FROM Film, AfficheFilm WHERE Film.id_affiche = AfficheFilm.id_affiche");
          $req ->execute();

    while( $donnees = $req->fetch() ) { ?>

    <a class="link-poster" href="parasite.php?id=<?= $donnees['id_film'];?>"><img src="<?= $donnees['image'];?>" alt=""></a>

    <?php
    } $req->closecursor();
    ?>

 </div>



