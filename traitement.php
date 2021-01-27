<!-- L'objectif de cette page est d'autoriser l'acces aux autres pages du site
vérifier que le nom qui vient d'index comporte au moins trois lettres différentes puis on accède à la page Indicateur avec le menu général
si le nom est infosite alors on voit au passage les statistiques d'utilisation du site
dans tous les cas on mémorise l'adresse IP du visiteur, son nom, la date et l'heure dans la table ConnexionsAuSite de la base familymercier -->


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylePourFamilyMercier.css" />
        <title>infos site</title>
    </head>

    <body>
        <header>
            <div id="titrePrincipal">
            <div id="logo">
            <h1>Infos site<br></h1>
            <p><br><p>
            </div>
            </div>
    
            <?php include("menu.php"); ?>
    
        </header>
        <section>
            <article>

            <?php echo 'pseudo entré : ' . $_POST['pseudo'] . '<br>'; 
        
            //<!-- tester la validité du nom rentré : au moins trois lettres et rester sur la page pour voir toutes les infos si nom "infosite" -->
            if (strlen($_POST['pseudo'])>3) {
        	
        	   // si le nom est valide, j'incrémente le nombre de vues
        	   $monfichier = fopen('compteur.txt', 'r+');
			     $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
			     $pages_vues += 1; // On augmente de 1 ce nombre de pages vues
			     fseek($monfichier, 0); // On remet le curseur au début du fichier
			     fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
 			    fclose($monfichier);
			     echo '<p>Cette page a été ouverte ' . $pages_vues . ' fois </p>';

			     // je récupère l'adresse IP du visiteur
			     echo 'L\'adresse IP de l utilisateur actuel est : '. getIp() . '<br>';

			     // je mets à jour le cookie
			     setcookie('pseudo',$_POST['pseudo'], time() + 365*24*3600, null, null, false, true);

			     // j'ouvre la base
			     include("ConnexionSQL.php");
						
			     //faire une pause si le nom est "infosite", ne pas enregistrer les coordonnées du visiteur
			     // présenter les données de la base et donner le choix de la redirection
			     if($_POST['pseudo']=='infosite') {

			 	   $reponse = $bdd->query('SELECT * FROM ConnexionsAuSite order by ID DESC LIMIT 0, 15');
                    ?>
                    <table>
                        <tr>
                            <th width="80">nom</th>
                            <th width="300">IPadress</th>
                            <th width="300">DateConnexion</th>
                        </tr>
                    <?php
                    while ($donnees = $reponse->fetch())
                        {
                        echo '<tr><td>' . htmlspecialchars($donnees['nom']) . '</td><td>' . htmlspecialchars($donnees['IPadress']) . 
                        '</td><td>' . htmlspecialchars($donnees['DateConnexion']) . '</td></tr>';
                        }
                        
                    echo '</table>';

                    // on en profite pour afficher le mini chat

                    echo '<br><br>Activité de la messagerie<br>';
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
                    
				    //echo "<li><a href=\"index.php\">Accueil</a></li>";
				    //echo "<li><a href=\"Indicateurs.php\">Indicateurs</a></li>";
				    exit();
			     

                 } else {

				    // si le nom est valide on va directement à la page indicateur et on enregistre les données du visiteur
				    $req = $bdd->prepare('INSERT INTO ConnexionsAuSite(nom, IPadress) VALUES(?, ?)');
				    $req->execute(array($_POST['pseudo'], getIp()));
				    header('location:Indicateurs.php');
				    exit();
			     }
        
            }
            // si le nom n'est pas bon retour à l'index
            header('location:index.php');
		      exit();
            ?> 
            </article>
        </section>
    </body>
</html>

<?php
    // fonction récupération de l'adresse IP du visiteur
    function getIp(){
        
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
             $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
           }
        return $ip;
    }
?>
        

	


