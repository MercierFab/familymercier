<?php 
session_start();
/*setcookie('pseudo', $nom, time() + 365*24*3600, null, null, false, true);*/
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylePourFamilyMercier.css" />
        <title>traitement php</title>
    </head>
	<p>
                
        <?php echo 'pseudo entré : ' . $_POST['pseudo']; ?> 
        <br>
        <?php echo 'mot de passe entré : ' . $_POST['pass']; ?>
        <br>

	</p>
	<!-- Je vais vérifier que le pseudo et le mot de passe existent dans une table avec correspondance, un pseudo avec en face le pass qui sera par défaut avec la même valeur. Et si je touve une correspondance j'envoie vers page 1. Si non retour à l'index avec un message "pseudo ou mot de passe inconnu" - Je renforcerai la sécurité dans un second temps  -->
	<?php

	$monfichier = fopen('compteur.txt', 'r+');
	$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
	$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
	fseek($monfichier, 0); // On remet le curseur au début du fichier
	fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
 	fclose($monfichier);
	echo '<p>Cette page a été ouverte ' . $pages_vues . ' fois </p>';


	$TablePseudo = array('manon','maeva','noemie','marie','fabrice');
	$TablePass = array('manon','maeva','noemie','marie','fabrice');
	$okConnection = false;

	echo "liste des pseudos et mots de passes autorisés : <br>";

	for ($numero = 0; $numero < 5; $numero++)
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
			
			header('location:page1.php?nom=' . $nom);
			exit();
		} else {
			echo "pas le bon identifiant > retour index";
			exit();
		}

	?>




