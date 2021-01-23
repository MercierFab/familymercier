<!DOCTYPE html>
<!-- Site familymercier.com commencé le 7 novembre 2020 par Fabrice Mercier
L'objectif est purement pédagogique et de passer du site statique au site dynamique
nouvelle version V.2 en PHP --> 
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylePourFamilyMercier.css" />
        <title>FamilyMercier.com laisser un message</title>
    </head>

    <body>
        <div id="blocPage"> <!-- Le bloc principal (main_wrapper) qui englobe l'ensemble de la page, permettra de centrer la page-->
            
        
            <section>
                <article>
                
                    <h1><img src="images/logoV.png" alt="logo V" width="50" height="50" class="ico_categorie" />Laissez un message</h1>

                        <form action="minichat_post.php" method="post">
                            <p>
                            <label for="pseudo    ">Pseudo</label>  <input type="text" name="pseudo" id="pseudo" size="30" /><br />
                            <label for="message">Message</label>  <input type="text" name="message" id="message" size="100" /><br />
                            <input type="submit" value="Envoyer" />
                            </p>
                        </form>
                        <p>
                        <?php
                        include("ConnexionSQL.php"); // pour ouvrir la base
                        // On récupère les 10 derniers enregistrements de la table minichat, trié par ordre décrossant
                        $reponse = $bdd->query('SELECT * FROM minichat order by ID DESC LIMIT 0, 15');
                        ?>
                        <table>
                        <tr>
                            <th width="80">Pseudo</th>
                            <th width="800">Message</th>
                        </tr>
                        <?php
                        while ($donnees = $reponse->fetch())
                            { // le htmlspecialchars() permet de protéger les données issues du formulaire pour éviter qu'elles ne soient interprétées comme du code html
                            echo '<tr><td>' . htmlspecialchars($donnees['pseudo']) . '</td><td>' . htmlspecialchars($donnees['message']) . '</td></tr>';
                            }
                        
                        echo '</table>';
                        $reponse->closeCursor(); // Termine le traitement de la requête
                        ?>  
                        </p>

                </article>
                <aside>
                    <h1>Connectez-vous<br>
                        <?php echo $_COOKIE['pseudo']; ?></h1>
                        <!-- Objectif : se connecter à la page 1 qui contient le menu que si l'identifiant est manon/maeva/noemie/marie/fabrice et le mot de passe correspondant au prenom. Si c'est pas bon la page 1 renvoie à l'index avec un message "identifiant ou mot de passe inconnu" -->
                    <form method="post" action="traitement.php">
                    <label for="pseudo">votre pseudo</label><br>
                    <input type="text" name="pseudo" id="pseudo" placeholder="fabrice" size="30" maxlength="10" autofocus />
                    <br><br><br>
                    <label for="pass">mot de passe</label><br>
                    <input type="password" name="pass" id="pass" size="30" maxlength="10"/><br><br>
                    
                <input type="submit" name="envoyer"><br>
            </form>

            </aside>
            </section>

             <?php include("footer.php"); ?>
        
        </div>
    </body>
</html>



















