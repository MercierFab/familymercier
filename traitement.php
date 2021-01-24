
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylePourFamilyMercier.css" />
        <title>traitement php</title>
    </head>
	<p>Si vous voyez cette page c'est que vous n'avez pas le bon pseudo ou le bon mot de passe</p>

    <p>            
        <?php echo 'pseudo entré : ' . $_POST['pseudo']; ?> 
        <br>
        <?php echo 'mot de passe entré : ' . $_POST['pass']; ?>
        <br>
        <p>

        Liste des nouvelles fonctions à venir<br>
        - tableau de données piscine et filtres joints<br>
        - créer l'onglet LoraWan en lien avec un capteur<br>
        - ...<br>


        </p>


	</p>
	<!-- Je vais vérifier que le pseudo et le mot de passe existent dans une table avec correspondance, un pseudo avec en face le pass qui sera par défaut avec la même valeur. Et si je touve une correspondance j'envoie vers page 1. Si non retour à l'index avec un message "pseudo ou mot de passe inconnu" - Je renforcerai la sécurité dans un second temps  -->
	<?php
  

	// récupération de l'adresse IP du visiteur
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

  	echo 'L adresse IP de l utilisateur est : '.getIp();




	$monfichier = fopen('compteur.txt', 'r+');
	$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
	$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
	fseek($monfichier, 0); // On remet le curseur au début du fichier
	fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
 	fclose($monfichier);
	echo '<p>Cette page a été ouverte ' . $pages_vues . ' fois </p>';


	$TablePseudo = array('fabrice');
	$TablePass = array('fabrice');
	$okConnection = false;

	echo "liste des pseudos et mots de passes autorisés : <br>";

	for ($numero = 0; $numero < 1; $numero++)
		{
    	echo $TablePseudo[$numero] . '  ' . $TablePass[$numero] . '<br />';
    	
    		if ($TablePseudo[$numero] == $_POST['pseudo'] & $TablePass[$numero] == $_POST['pass']) 
    		{
    			$okConnection = true; 
    			$nom = $TablePseudo[$numero];
    			setcookie('pseudo', $nom, time() + 365*24*3600, null, null, false, true);
    		}
		}

	if ($okConnection) {
			
			header('location:Indicateurs.php');
			exit();
		} else {
			echo "retourner à l'accueil pour recommencer la connexion <br /><br />";
			echo "<li><a href=\"index.php\">Accueil</a></li>";
			exit();
		}

	?>




