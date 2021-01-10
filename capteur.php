<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylePourFamilyMercier.css" />
        <title>capteur</title>
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
            <p>
            <li><a href="https://www.elsys.se/shop/my-account/view-order/4382/">Il est où le capteur?</a></li>
            
            </p>


            </article>
        


        <aside>
            <form method="post" action="traitement.php">
                    <br /><br/>...en chantier...<br>

                    <br /><br />
                    <textarea class="boiteTrad" name="traduction" id="traduction">...</textarea>
                    <br /><br />
                    <input type="checkbox" name="genreF" id="genreF"/><label for="genreF">fini</label>
                    <input type="checkbox" name="genreM" id="genreM"/><label2 for="genreFM">pas fini</label2><br /><br />
            
                    
                <input type="submit" name="envoyer">
            </form>
            </aside>
        </section>
        <!-- pied de page commun-->
        <?php include("footer.php"); ?>

    </body>
</html>
