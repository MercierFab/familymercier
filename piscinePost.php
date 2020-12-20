<?php
// connection à la table piscine pour ajouter un enregistrement
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'Loslos!38', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}


// le cookie TablePiscine a 4 états possibles 'pasInterroge', 'existe', 'existePas', 'enregistrer' 
switch ($_COOKIE['TablePiscine']) {
	case 'pasInterroge':
		# code...
		
		$req = $bdd->prepare('SELECT * FROM Piscine WHERE Date=?'); // préparer la requete
		$req->execute(array($_POST['dateReleve'])); // executer la requete
		$donnees = $req->fetch(); // se placer sur le premier champs

		// si l'enregistrement existe déja -> le renvoyer pour le modifier ou le supprimer - le cookie TablePiscine a 3 états possibles 'pasInterroge', 'existe' ou 'existePas' 
		if ($donnees == TRUE) {
   			echo '$donnees == TRUE - N° du filtre recherché : $_POST = ' . $_POST['dateReleve'] . '<br>';
   			echo 'date renvoyée par la recherche :' . $donnees['Date'] .' pour le filtre : $donnees[\'NumFiltre\']=' . $donnees['NumFiltre'] . '<br>';
   			setcookie('TablePiscine', 'existe', time() + 365*24*3600, null, null, false, true);
   			echo 'cookie =' . $_COOKIE['TablePiscine'];
		}else{
			setcookie('TablePiscine', 'existePas', time() + 365*24*3600, null, null, false, true);
   			echo 'cookie =' . $_COOKIE['TablePiscine'] . '<br>';
			echo "pas trouvé " . $_POST['dateReleve'] . '<br>';  		
		}
		$req->closeCursor(); // on libère le curseur pour la prochaine requête
		break;

	case 'enregistrer':

		// Insertion du message à l'aide d'une requête préparée
		$req = $bdd->prepare('INSERT INTO Piscine (date, NiveauEau, ClMesure, PhMesure, TempEau, TpsPompe, AjoutCl, PlusPh, MoinsPh, AjoutEau, NumFiltre, Remarque) 
		VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
		$req->execute(array($_POST['dateReleve'], $_POST['NiveauEau'], $_POST['ClMesure'], $_POST['PhMesure'], $_POST['TempEau'], $_POST['TpsPompe'], $_POST['AjoutCl'], 
			$_POST['PlusPh'], $_POST['MoinsPh'], $_POST['AjoutEau'], $_POST['NumFiltre'], $_POST['Remarque']));
		// revenir à l'étape initiale, pour refaire un cycle
		setcookie('TablePiscine', 'pasInterroge', time() + 365*24*3600, null, null, false, true);

	break;
	default:
		echo "rien à faire ici". '<br>';
		echo 'cookie =' . $_COOKIE['TablePiscine'] . '<br>';
	break;
}


?>
<!-- un stop pour voir le resultat avant de partir :-) -->
<form method="post" action="SQLPiscine.php">
   	<fieldset>
		<input type="checkbox" name="flag"/>			
	</fieldset>
		<input type="submit" value="Envoyer" />
</form>
