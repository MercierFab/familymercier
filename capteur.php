<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylePourFamilyMercier.css" />
        <title>familymercier.com Capteur</title>
    </head>

    <body>
        <header>
        <div id="titrePrincipal">
        <div id="logo">
        <h1>Capteur<br></h1>
        <p><br><p>
        </div>
        </div>
    
        <?php include("menu.php"); ?>
    
    </header>
        
        <section>
            <article>

            <h2>Bonjour <?php echo $_COOKIE['pseudo']; ?>!</h2>
            <p>L'objectif est de connecter le capteur à la base de données en utilisant le réseau Lorawan.
            <br>Un vrai challenge!
            <br>

            <!--<li><a href="#">...</a></li> -->
            <br>
            <img src="images/lorawan.png" alt="logo V" width="750" height="500" class="mesPhotos" />

            </p>


            </article>
        
        </section>
        <!-- pied de page commun-->
        <?php include("footer.php"); ?>

    </body>
</html>
