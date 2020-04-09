<!--TOGGLE MOBILE-->

<div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger">
        <div></div>
    </div>
    <div class="menu">
        <div>
            <div>
                <ul>
                    <Li><a href="catalogue.php">Films</a></Li>
                    <Li><a href="connexion.php">Connexion</a></Li>
                        <div class="liens-couleurs">

                    <li>
                        <div class="style_axel"><a href="<?php echo $actuel; ?>?style=../css/index.css"></a>
                            <div>
                    </li>
                    <li>
                        <div class="style_pol"><a href="<?php echo $actuel; ?>?style=../pol/index2.css"></a></div>
                    </li>
                    <li>
                        <div class="style_steven"><a href="<?php echo $actuel; ?>?style=../steven/index3.css"></a></div>
                    </li>
                    <li>
                        <div class="style_ilayda"><a href="<?php echo $actuel; ?>?style=../axel/index4.css"></a></div>
                    </li>
                    </div>



                    <form action="include/searchfilms.php">
                        <input type="text" placeholder="" name="search">
                        <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
                    </form>

                </ul>
            </div>
        </div>
    </div>

</div>


<!--TITRE-->

<div class="title-dada">
    <h1> <a href="index.php"> ALLO SIMPLON</a></h1>
</div>


<!--NAV BAR-->

<div class="nav-dada">
    <div class="logo-dada">
        <h1><a class="lien-home" href="index.php">ALLO SIMPLON</a> </h1>
    </div>
    <div class="menu-nav">
        <form class="search-bar" action="include/searchfilms.php">
            <input type="text" placeholder="" name="search">
            <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
        </form>
        <div class="menu-dada">
            <ul>
            <?php 
                        if(isset($_SESSION['prenom'])){ ?>
                            <li><a style="font-size: 12px;"><?php echo "Bonjour, ".$_SESSION['prenom'];
                         ?></a></li>


                <li>
                    <div class="style_axel"><a href="<?php echo $actuel; ?>?style=axel/index4.css"></a>
                        <div>
                </li>
                <li>
                    <div class="style_pol"><a href="<?php echo $actuel; ?>?style=pol/index2.css"></a></div>
                </li>
                <li>
                    <div class="style_steven"><a href="<?php echo $actuel; ?>?style=steven/index3.css"></a></div>
                </li>
                <li>
                    <div class="style_ilayda"><a href="<?php echo $actuel; ?>?style=index.css"></a></div>
                </li>
                <li><a href="catalogue.php" style="font-size: 16px;">Films</a></li>
                <?php echo "<li><a href='include/deconnexion.php' style='font-size: 16px;'>Se déconnecter</a></li>"; 
                if ($_SESSION['type'] == 1) { 
                echo "<li><a href='include/tabadmin.php' style='font-size: 16px;'>Admin</a></li>"; 
                }
                else { ?>
                    <li><a href="include/updateaccount.php?id=<?= $_SESSION['id'];?>" style="font-size: 16px;">Profil</a></li> 
                <?php } ?>
                        
            </ul>
        </div>
    </div>
</div>
                        <?php 
                        }
                        else { ?>
                            <ul>


                <li>
                    <div class="style_axel"><a href="<?php echo $actuel; ?>?style=axel/index4.css"></a>
                        <div>
                </li>
                <li>
                    <div class="style_pol"><a href="<?php echo $actuel; ?>?style=pol/index2.css"></a></div>
                </li>
                <li>
                    <div class="style_steven"><a href="<?php echo $actuel; ?>?style=steven/index3.css"></a></div>
                </li>
                <li>
                    <div class="style_ilayda"><a href="<?php echo $actuel; ?>?style=index.css"></a></div>
                </li>
                <li><a href="catalogue.php"  style="font-size: 16px;">Films</a></li>
                <?php 
                        echo "<li><a href='include/createaccount.php' style='font-size: 16px;'>Inscription</a></li>";
                        echo "<li><a href='connexion.php' style='font-size: 16px;'>Connexion</a></li>";
                    }?>
                        
            </ul>
        </div>
    </div>
</div>

<div class="vide"></div>