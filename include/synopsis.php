<h2 class="page-film"><?= $films->titre;?></h2>
<?php
if($_GET['success'] == 1) { ?>
<h2 class="page-film">Le film a été ajouté à vos favoris</h2>
<?php } ?>
<?php if(isset($_SESSION['id'])) { ?>
<a href="include/addtofavoris.php?id=<?= $idfilm ?>">Ajouter ce film à vos favoris</a>
<?php } ?>
    <!--SYNOPSIS-->

    <div class="img-resume">
        <img class="img-film" src="<?= $img->image;?>" alt="">
        
        <div class="synop">
                <p class="synop-title">Synopsis</p>
                <?= $films->synopsis;?>
        </div>
    </div>