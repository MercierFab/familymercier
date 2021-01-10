<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylePourFamilyMercier.css" />
        <title>Indicateurs</title>
    </head>

    <body>
        <header>
        <div id="titrePrincipal">
        <div id="logo">
        <h1>Indicateurs<br></h1>
        <p><br><p>
        </div>
        </div>
    
        <?php include("menu.php"); ?>
    
    </header>
        
        <section>
            <article>

            <h2>Bonjour <?php echo $_COOKIE['pseudo']; ?>!</h2>
            
            <p>
            Quelques indicateurs clés, toutes les données sont visibles dans l'onglet DONNEES.
            </p>

            <?php
            // acces à la base sur l'ordi
            try{$bdd = new PDO('mysql:host=localhost;dbname=FamilyMercier;charset=utf8', 'root', 'Loslos!38', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));}
            
            catch(Exception $e){die('Erreur : '.$e->getMessage());}
            
            // Présentation des variations de température

            $reponse = $bdd->query('SELECT year(`date`) , min(TempEau), round(AVG(TempEau)), MAX(TempEau), round(STDDEV(TempEau)) FROM Piscine GROUP by year(`Date`)');
            ?>
            <table>
                <p>Evolution de la température de l'eau</p>
                <tr>
                    <th width="60">year</th>
                    <th width="40">min</th>
                    <th width="60">moy</th>
                    <th width="50">max</th>
                    <th width="50">EType</th>

                </tr>
            <?php
            while ($donnees = $reponse->fetch())
            {
                echo 
                '<tr><td>' . $donnees['year(`date`)'] . '</td><td>' . $donnees['min(TempEau)'] . '</td><td>' . $donnees['round(AVG(TempEau))'] 
                . '</td><td>' . $donnees['MAX(TempEau)'] . '</td><td>' . $donnees['round(STDDEV(TempEau))'] . '</td></tr>';
            }
            echo '</table>';

            // Présentation des variations de niveau

            $reponse = $bdd->query('SELECT year(`date`) , min(NiveauEau), round(AVG(NiveauEau)), MAX(NiveauEau), round(STDDEV(NiveauEau)) FROM Piscine GROUP by year(`Date`)');
            ?>
            <table>
                <p>Evolution du niveau d'eau</p>
                <tr>
                    <th width="60">year</th>
                    <th width="40">min</th>
                    <th width="60">moy</th>
                    <th width="50">max</th>
                    <th width="50">EType</th>

                </tr>
            <?php
            while ($donnees = $reponse->fetch())
            {
                echo 
                '<tr><td>' . $donnees['year(`date`)'] . '</td><td>' . $donnees['min(NiveauEau)'] . '</td><td>' . $donnees['round(AVG(NiveauEau))'] 
                . '</td><td>' . $donnees['MAX(NiveauEau)'] . '</td><td>' . $donnees['round(STDDEV(NiveauEau))'] . '</td></tr>';
            }
            echo '</table>';





            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>  

            </article>
        


        <aside>
            <form method="post" action="traitement.php">
                    <br /><br/>...en chantier...<br>

                    <br /><br />
                    <textarea class="boiteTrad" name="traduction" id="traduction">...</textarea>
                    <br /><br />
                    <input type="checkbox" name="genreF" id="genreF"/><label for="genreF">fini</label>
                    <input type="checkbox" name="genreM" id="genreM"/><label2 for="genreFM">pas fini</label2><br /><br />
            
                    <!-- <label for="pays">Dans quel pays habitez-vous ?</label>
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
                    <br><br> -->
                <input type="submit" name="envoyer">
            </form>
            </aside>
        </section>
        <!-- pied de page commun-->
        <?php include("footer.php"); ?>

    </body>
</html>
