<h2 class="page-film"><?= $donnees['titre'];?></h2>

    <!--SYNOPSIS-->

    <div class="img-resume">
        <img class="img-film" src="<?= $donnees['image'];?>" alt="">
        
        <div class="synop">
                <p class="synop-title">Synopsis</p>
                <?= $donnees['synopsis'];?>
        </div>
    </div>
