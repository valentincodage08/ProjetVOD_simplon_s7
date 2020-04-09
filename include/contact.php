<section class="tarifs-dada">
    <h2>Contact</h2>
</section>

<form id="formcontact" action="include/traitementcontact.php" method="POST" style="display: flex; justify-content: space-around; align-items: center;">
    <input name="name" type="text" placeholder="Nom" style="margin-bottom: 15px;"><br>
    <input name="firstname" type="text" placeholder="Prénom" style="margin-bottom: 15px;"><br>
    <input name="email" type="email" placeholder="Adresse mail" style="margin-bottom: 15px;">
    <input name="message" placeholder="retest" style="height: 80px; width: 250px; margin-bottom: 20px;">
    <input class="ok"type="submit" id='submit' value='Envoyer'>
</form>

<div id="container">

        <form action="include/traitementcontact.php" method="POST">
            <h2>Contact</h2>

            <label><b>Nom</b></label>
            <input class="login" type="text" placeholder="Votre nom" name="name" required> <br>

            <label><b>Prénom</b></label>
            <input class="login"  type="text" placeholder="Votre prénom" name="firstname" required><br>

            <label><b>Adresse mail</b></label>
            <input class="login"  type="text" placeholder="Votre mail" name="email" required><br>

            <label><b>Message</b></label>
            <input class="login"  type="text" placeholder="Votre message" name="message" required><br>

            <input class="ok"type="submit" id='submit' value='Envoyer'> <br>


            <?php
            if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1 || $err==2)
                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
            }
            ?> 


        </form>
    </div>

