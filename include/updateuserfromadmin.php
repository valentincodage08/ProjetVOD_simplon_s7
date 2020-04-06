<html>
<head>
<link rel="stylesheet" href="styleforms.css">
</head>
<body>

<?php

include 'connexiondb.php';

$userid = $_GET['id'];

$req = $bdd->prepare("SELECT * FROM User WHERE id_user=$userid");
        $req->execute();


          while ($donnees = $req->fetch())
{

?>

<div class="container">
  <form id="contact" action="updateuserfromadmintraitement.php?id=<?= $userid;?>" method="post">
    <h3><center>Modification Users</center></h3>
    <fieldset>
      <input placeholder="Nom utilisateur" name="username" type="text" tabindex="1" autofocus value="<?= $donnees['username'];?>">
    </fieldset>
    <fieldset>
      <input placeholder="Nom" name="nom" type="text" tabindex="2" value="<?= $donnees['nom'];?>">
    </fieldset>
    <fieldset>
      <input placeholder="Prénom" name="prenom" type="text" tabindex="3" value="<?= $donnees['prenom'];?>">
    </fieldset>
    <fieldset>
      <input placeholder="Adresse" name="adresse" type="text" tabindex="4" value="<?= $donnees['adresse'];?>">
    </fieldset>
    <fieldset>
      <button type="submit" value="submit">Modifier</button>
    </fieldset>
  </form>
</div>

<?php
}
?>

</body>
</html>