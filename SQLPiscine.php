<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylePourFamilyMercier.css" />
        <title>Piscine</title>
    </head>
    <header>
        <div id="titrePrincipal">
        <div id="logo">
        <h1>Mon Super site<br><br></h1>
        </div>
        </div>
    
        <?php include("menu.php"); ?>
    
    </header>
	<body>
		<br><br>
		<?php
		try
		{
			// On se connecte à MySQL - test = nom de la base - root l'utilisateur - Los.. le mot de passe - array... pour avoir les erreurs en retour - PDO est un mode de connection universel
			$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'Loslos!38', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		// le bloc try essaye d'ouvrir la base et rentre dans le bloc catch en cas de problème
		catch(Exception $e)
		{
			// En cas d'erreur, on affiche un message et on arrête tout
 	       die('Erreur : '.$e->getMessage());
		}
		echo 'cookie =' . $_COOKIE['TablePiscine'] . '<br>';

		// Si tout va bien, on peut continuer

		// On récupère tout le contenu de la table Piscine
		$reponse = $bdd->query('SELECT * FROM Piscine order by date');
		
		?>
		<caption>Relevé de mesures Piscine</caption>
		<table>
			<tr>
				<th width="95">date</th>
				<th width="60">eau</th>
				<th width="60">Cl</th>
				<th width="50">Ph</th>
				<th width="40">T°</th>
				<th width="50">P</th>
				<th width="40">+Cl</th>
				<th width="60">Ph+</th>
				<th width="60">Ph-</th>
				<th width="60">+/-eau</th>
				<th width="20">Filtre</th>
				<th width="380">Remarque</th>
			</tr>
		<?php
		while ($donnees = $reponse->fetch())
		{
    		echo 
    		'<tr><td>' . $donnees['Date'] . '</td><td>' . $donnees['NiveauEau'] . ' mm' . '</td><td>' . $donnees['ClMesure'] 
    		. '</td><td>' . $donnees['PhMesure'] . '</td><td>' . $donnees['TempEau'] . '°' . '</td><td>' . $donnees['TpsPompe'] . ' h'
    		. '</td><td>' . $donnees['AjoutCl'] . '</td><td>' . $donnees['PlusPh'] . '</td><td>' . $donnees['MoinsPh'] 
    		. '</td><td>' . $donnees['AjoutEau'] .' mm' . '</td><td>' . $donnees['NumFiltre'] . '</td><td>' . $donnees['Remarque']
    		. '</td></tr>';
		}
		echo '</table>';
		$reponse->closeCursor(); // Termine le traitement de la requête
		
		
		// au premier passage, demander la date pour savoir si on doit modifier ou créer un champs  
		// le cookie TablePiscine a 4 états possibles 'pasInterroge', 'existe', 'existePas', 'enregistrer' 
		switch ($_COOKIE['TablePiscine']) 
		{
			case 'pasInterroge': // c'est le premier passage, on affiche le tabeau et demande une date
				echo 'passage dans la boucle cookie pas interrogé' . '<br>';
				echo 'cookie =' . $_COOKIE['TablePiscine'] . '<br>';
		?>
				<form method="post" action="piscinePost.php">
 
	   				<fieldset>
    	   			<input type="date" name="dateReleve"/>
   					</fieldset>
   					<input type="submit" value="Envoyer" />
				</form>
			
		<?php
			break;
			
			case 'existe': // c'est le second passage, l'enregistrement demandé existe, on va proposer de le modifier ou de le supprimer
				echo 'passage dans la boucle cookie existe' . '<br>';
				echo 'cookie =' . $_COOKIE['TablePiscine'] . '<br>';
				
			break;

			case 'existePas': // c'est le second passage, l'enregistrement demandé n'existe pas, on va pouvoir le créer
				echo 'passage dans la boucle n existe pas encore pour préparer la création' . '<br>';
				setcookie('TablePiscine', 'enregistrer', time() + 365*24*3600, null, null, false, true);
		?>
				<form method="post" action="piscinePost.php">
 
   				<fieldset>
       			<input type="date" name="dateReleve"/>
       			<input type="number" name="NiveauEau" id="NiveauEau" value="0" min="-1500" max="30"/>
       			<select name="ClMesure" id="ClMesure">
           			<option value="0">0</option>
           			<option value="0.3">0.3</option>
           			<option value="1">1</option>
           			<option value="1.5">1.5</option>
           			<option value="3">3</option>
          		</select>
          		<select name="PhMesure" id="PhMesure">
           			<option value="0">0</option>
           			<option value="6.8">6.8</option>
           			<option value="7">7</option>
           			<option value="7.2">7.2</option>
          		</select>
          		<input type="number" name="TempEau" id="TempEau" min="0" max="100" value="0" width="200" />
      			<input type="number" name="TpsPompe" id="TpsPompe" min="0" max="24" value="0" width="80" />
      			<input type="number" name="AjoutCl" id="AjoutCl" min="0" max="100" value="0" width="60" />
				<input type="number" name="PlusPh" id="PlusPh" min="0" max="10000" value="0" />
				<input type="number" name="MoinsPh" id="MoinsPh" min="0" max="10000" value="0" />
				<input type="number" name="AjoutEau" id="AjoutEau" min="-10000" max="10000" value="0" />
				<input type="number" name="NumFiltre" id="NumFiltre" min="0" max="100" value="0" />
				<input type="text" name="Remarque" id="Remarque" size="40" />
   				</fieldset>
   				<input type="submit" value="Envoyer"

   		<?php
				
			break;

			default:
				echo "désolé rien à faire";
				
		}			
		?>
			
		
    </body>
</html>


