<html>
<head>
<link rel="stylesheet" href="styleforms.css">
</head>
<body>

<?php

session_start();
include 'connexiondb.php';

$userid = $_GET['id'];?>

<div class="container">
  <form id="contact" action="updateuseraccount.php?id=<?= $userid;?>" method="post">
    <h3><center>Modification Users</center></h3>
    <fieldset>
      <input placeholder="Username" name="username" type="text" tabindex="1" autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Nom" name="nom" type="text" tabindex="2">
    </fieldset>
    <fieldset>
      <input placeholder="Prénom" name="prenom" type="text" tabindex="3">
    </fieldset>
    <fieldset>
      <input placeholder="Adresse" name="adresse" type="text" tabindex="4">
    </fieldset>
    <fieldset>
      <button type="submit" value="submit">Modifier</button>
    </fieldset>
  </form>
</div>

</body>
</html>