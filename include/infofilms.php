<!--INFO FILM-->


<div class="rond-titre">Résumé</div>

<h3 class="info-film"></h3>

<div class="ronds-info">

    <div class="ronds-bis">
        <div class="ronds-ronds">
            <?= $films->duree;?>
        </div>
        Durée
    </div>


    <div class="ronds-bis">
        <div class="ronds-ronds">
        <?= $films->note;?>/5
        </div>
        Note
    </div>


    <div class="ronds-bis">
        <div class="ronds-ronds">
        <?= $films->date_sortie;?>
        </div>
        Date de sortie
    </div>


</div>
