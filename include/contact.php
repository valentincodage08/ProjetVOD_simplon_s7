<section class="tarifs-dada">
    <h2 id="formcontact">Contact</h2>
</section>

<div id="container">


        <form action="include/traitementcontact.php" method="POST">
            <h2>Contact</h2>
            <?php 
                if(isset($_GET['success'])){
                if($_GET['success'] == '1') {?>
                    <div class="alert alert-secondary" role="alert">
                    Nous avons bien reçu votre message, il sera traité dans les plus brefs délais.
                    </div>
            <?php }} ?>

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

