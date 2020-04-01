 <!--AFFICHE-->
<?php 
include 'include/connexiondb.php';
?>
 <div class="title-dada-affiche">
    <h2>A l'affiche</h2>
</div>

<div class="center slider">

    <?php $req = $bdd->prepare(" SELECT image FROM AfficheFilm");
          $req ->execute();

    while( $donnees = $req->fetch() ) { ?>

    <a class="link-poster" href=""><img src="<?= $donnees['image'];?>" alt=""></a>

    <?php
    } $req->closecursor();
    ?>

 </div>



