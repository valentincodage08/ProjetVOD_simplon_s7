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







  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--FOTORAMA-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>


  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>


</head>

<body>

  <h3 class="font-weight-light text-black-50 mt-4 mb-5">
    <center>Créer un compte</center>
  </h3>

  <div class="container">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
        <form action="createuseracc.php" method="post">
          <div class="form-group">
            <label>Nom de compte</label>
            <input type="text" class="form-control" name="username" tabindex="1" autofocus>
          </div>
          <div class="form-group">
            <label>Mot de passe</label>
            <input type="password" class="form-control" name="password" tabindex="2">
          </div>
          <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control" name="nom" tabindex="3">
          </div>
          <div class="form-group">
            <label>Prénom</label>
            <input type="text" class="form-control" name="prenom" tabindex="4">
          </div>
          <div class="form-group">
            <label>Adresse</label>
            <input type="text" class="form-control" name="adresse" tabindex="5">
          </div>
          <center><button type="submit" class="btn btn-outline-secondary mb-5" value="submit">Valider</button></center>
        </form>
      </div>
    </div>
  </div>

</body>

</html>