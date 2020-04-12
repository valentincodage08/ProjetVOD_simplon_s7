<h2 class="page-film"><?= $films->titre;?></h2>
<?php
if($_GET['success'] == 1) { ?>
<h2 class="page-film" style="font-size: 15px;">Le film a été ajouté à vos favoris</h2>
<?php } ?>
<?php if(isset($_SESSION['id'])) { ?>
<a style="text-decoration: none;" href="include/addtofavoris.php?id=<?= $idfilm ?>"><h2 class="page-film" style="font-size: 15px;">Ajouter ce film aux favoris</h2></a>
<?php } ?>
    <!--SYNOPSIS-->

    <div class="img-resume">
        <img class="img-film" src="<?= $img->image;?>" alt="">
        
        <div class="synop">
                <p class="synop-title">Synopsis</p>
                <?= $films->synopsis;?>
        </div>
    </div>