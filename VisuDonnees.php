<!DOCTYPE html>
<html lang="fr">
<!-- L'objectif de cette page est d'afficher toutes les données disponibles pour la piscine -->
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylePourFamilyMercier.css" />
        <title>familymercier.com données</title>
    </head>
    <header>
        <div id="titrePrincipal">
        <div id="logo">
        <h1>Toutes les données disponibles<br></h1>
        <p><br><p>
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
			
			
			//$bdd = new PDO('mysql:host=sql151.main-hosting.eu;dbname=u477330510_familymercier;charset=utf8', 'u477330510', 'ZozoEstParti76', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			//$bdd = new PDO('mysql:host=sql151.main-hosting.eu;dbname=u477330510_familymercier;charset=utf8', 'u477330510', 'LukkasParis75', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

			// ok en local : $host = 'localhost'; $dbname = 'FamilyMercier'; $username = 'root'; $password = 'Loslos!38';
			// NOK $host = '185.224.137.151'; $dbname = 'u477330510_familymercier'; $username = 'u477330510'; $password = 'LukkasParis75';

			$host = 'localhost'; $dbname = 'FamilyMercier'; $username = 'root'; $password = 'Loslos!38';
			$bdd = new PDO("mysql:host=$host;dbname=$dbname" , $username, $password);
			$bdd->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

		}
		// le bloc try essaye d'ouvrir la base et rentre dans le bloc catch en cas de problème
		catch(Exception $e)
		{
			// En cas d'erreur, on affiche un message et on arrête tout
 	       die('Erreur : '.$e->getMessage());
		}
		
		// On récupère tout le contenu de la table Piscine
		$reponse = $bdd->query('SELECT * FROM Piscine order by date');
		
		?>
		<table>
			<tr>
				<th width="80">date</th>
				<th width="50">eau</th>
				<th width="40">Cl</th>
				<th width="40">Ph</th>
				<th width="30">T°</th>
				<th width="30">P</th>
				<th width="30">+Cl</th>
				<th width="40">Ph+</th>
				<th width="40">Ph-</th>
				<th width="50">+/-eau</th>
				<th width="20">Filtre</th>
				<th width="580">Remarque</th>
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
		?>	
    </body>

</html>


