<html>
<head></head>
<body>
    <tr>
        <td>Prénom</td>
        <td>Nom</td>
        <td>Mail</td>
        <td>Message</td>
    </tr>


<?php

include 'connexiondb.php';

$req = $bdd->prepare("SELECT * FROM User");
    $req->execute();

    while ($donnees = $req->fetch())
{ ?>
    </tr>
        <td><?= $donnees[id_user]; ?></td>
        <td><?= $donnees[username]; ?></td>
        <td><?= $donnees[nom]; ?></td>
        <td><?= $donnees[prenom]; ?></td>
        <td><?= $donnees[adresse]; ?></td>
    </tr>

<?php
}
?>

</body>
</html>