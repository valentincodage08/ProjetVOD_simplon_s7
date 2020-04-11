<?php 
session_start();
$idfilm = $_GET['id'] 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALLO SIMPLON</title>

    <!--SLICK-->

    <link rel="stylesheet" type="text/css" href="slick\slick\slick.css" />
    <link rel="stylesheet" type="text/css" href="slick\slick\slick-theme.css" />




    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" media="screen, projection" type="text/css" id="css" href="<?php echo $url; ?>" />


    <!--GOOGLE FONTS-->

    <link
        href="https://fonts.googleapis.com/css?family=Baloo+Tammudu+2:400,500,600,700,800|Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Asap:400,400i,500,500i,600,600i,700,700i|Bellota+Text:300,300i,400,400i,700,700i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron:700,800,900|Quicksand:300,400,500,600,700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--FOTORAMA-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>


    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>


</head>

<?php $idfilm = $_GET['id']; ?>

<body class="bg-light">
    <h3 class="font-weight-light text-black-50 mt-4 mb-5">
        <center>Maintenant, ajoutez le réalisateur du film</center>
    </h3>
    <h4 class="font-weight-light text-black-50 mt-4 mb-5">
        <center>Vous pouvez recommencer si plusieurs réalisateurs ont collaboré pour ce film, une fois terminé cliquez sur terminé</center>
    </h4>
    <h4 class="font-weight-light text-black-50 mt-4 mb-5">
        <center>Choisissez un réalisateur déjà répertorié</center>
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <form action="insertrealtorealisetraitement.php?id=<?= $idfilm ?>" method="post">
                        <div class="form-group mt-3 mb-3">
                            <center><label for="exampleFormControlSelect1">Réalisateurs</label></center>
                            <select class="form-control" id="exampleFormControlSelect1" name="real">
                            <?php include 'connexiondb.php';
                            $req = $bdd->prepare ("SELECT realisateur_id, nom, prenom FROM Realisateur");
                            $req->execute();
                            while( $donnees = $req->fetch() ) {
                            ?>
                                <option value="<?= $donnees['realisateur_id'] ?>"><?= $donnees['prenom'] ?> <?= $donnees['nom'] ?></option>
                            <?php } $req->closecursor(); ?>
                            </select>
                            <center><button type="submit" class="btn btn-outline-secondary mt-5" value="submit">Valider</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </h4>
    <h4 class="font-weight-light text-black-50 mt-4 mb-5">
        <center>Ou ajoutez un réalisateur non répertorié à ce film</center>
    </h4>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form action="insertrealtofilmstraitement.php?id=<?= $idfilm ?>" method="post">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" name="nom" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label>Prénom</label>
                        <input type="text" class="form-control" name="prenom" tabindex="2" required>
                    </div>
                    <div class="form-group">
                        <label>URL de la photo du réalisateur</label>
                        <input type="text" class="form-control" name="photo" tabindex="3" required>
                    </div>
                    <div class="form-group">
                        <label>Faites une brève description du réalisateur, son cursus etc</label>
                        <input type="text" class="form-control" name="description" tabindex="4" required>
                    </div>
                    <center><button type="submit" class="btn btn-outline-secondary mb-5" value="submit">Valider</button>
                    </center>
                </form>
                <center><a href="tabadmin.php?success=5"><button class="btn btn-outline-secondary mb-5">Terminé</button></a>
                    </center>
            </div>
        </div>
    </div>
</body>

</html>