<h2 class="page-film"><?= $films->titre;?></h2>

    <!--SYNOPSIS-->

    <div class="img-resume">
        <img class="img-film" src="<?= $img->image;?>" alt="">
        
        <div class="synop">
                <p class="synop-title">Synopsis</p>
                <?= $films->synopsis;?>
        </div>
    </div>