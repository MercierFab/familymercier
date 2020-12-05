<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylePourFamilyMercier.css" />
        <title>Page 1 - FamilyMercier</title>
    </head>

    <body>
        <header>
                <div id="titrePrincipal">
                    <div id="logo">
                        <h1>Mon Super site - page Statique</h1>
                    </div>
                </div>
                <?php include("menu.php"); ?>
        </header>
        <br>
        
        <section>
            <article>

            <h2>A traduire pour demain <?php echo $_COOKIE['pseudo']; ?></h2>
            <p><img src="images/anni.gif" class="imageflottante" 
            alt="Image flottante" height="100" width="100"/> 
        
            
            In June, Diane visited her friends who live in San Francisco, California. This was Diane’s first time in the city, and she enjoyed her opportunities to walk around and explore.

            On the first day of her trip, Diane visited the Golden Gate Bridge. This red suspension bridge measures 1.7 miles in length. Diane and her friends did not walk across the bridge. However, they viewed it from the Golden Gate National Recreation Area, which offers hiking trails, picnicking areas, and presents spectacular views of the bridge and city. Diane and her friends made sure to take a group photograph here, featuring the bridge in the background.

            The next day, Diane and her friends visited Alcatraz Island. This island is located 1.25 miles offshore in the San Francisco Bay. It used to serve as a lighthouse, military fort, and prison. Diane and her friends took a small tour boat across bay to reach the island. Their visit included a guided tour through the old military base and prison. They also took a walk around the island to appreciate some of the native wildlife in addition to the views of the city.

            Diane and her friends spent the final day of her vist in San Francisco’s downtown area. Diane’s favorite part of her entire trip was taking a trolley to transport her up and down the hilly streets of San Francisco. Diane did a lot of shopping downtown on her last day. She and her friends celebrated the end of her visit by having dinner at one of San Francisco’s best restaurants.</p>
            <audio src="images/Applau.mp3" controls>message si marche pas</audio>
            <!-- à revoir plus tard
            <form action="cible_envoi.php" method="post" enctype="multipart/form-data">
                <p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" />
                </p>
            </form> -->
            <pre>
                <?php
                print_r($_FILE);
                ?>
            </pre>

            </article>
            <aside>
            <form method="post" action="traitement.php">
                    <br /><br />
                    Bonjour <?php echo $_GET['nom']; ?><br>
                    <!-- Message qui vient de Traitement.php : <?php echo $_POST['message2']; ?> ne fonctionne pas pourquoi ??? -->

                    <br /><br />
                    <textarea class="boiteTrad" name="traduction" id="traduction">tu peux écrire la traduction ici (te toute façon ça ne sert à rien pour l'instant)</textarea>
                    <br /><br />
                    <input type="checkbox" name="genreF" id="genreF"/><label for="genreF">fini</label>
                    <input type="checkbox" name="genreM" id="genreM"/><label2 for="genreFM">pas fini</label2><br /><br />
            
                    <label for="pays">Dans quel pays habitez-vous ?</label>
                    <select name="pays" id="pays">
                        <optgroup label="Europe">
                            <option value="france">France</option>
                            <option value="espagne">Espagne</option>
                            <option value="italie">Italie</option>
                            <option value="royaume-uni">Royaume-Uni</option>
                        </optgroup>
                        <optgroup label="Amérique">
                            <option value="canada">Canada</option>
                            <option value="etats-unis">Etats-Unis</option>
                            </optgroup>
                            <optgroup label="Asie">
                            <option value="chine">Chine</option>
                            <option value="japon">Japon</option>
                        </optgroup>
                    </select>
                    <br><br>
                <input type="submit" name="envoyer">
            </form>
            <video src="images/Kitten.mp4" controls poster="images/kitten.png" width="200"></video>
            </aside>
        </section>
        <!-- pied de page commun-->
        <?php include("piedDePage.php"); ?>

    </body>
</html>
