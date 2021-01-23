<!DOCTYPE html>
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
		
		// On se connecte à MySQL - test = nom de la base - root l'utilisateur - Los.. le mot de passe - array... pour avoir les erreurs en retour - PDO est un mode de connection universel

		// ça marche : $host = 'sql151.main-hosting.eu'; $dbname = 'u477330510_familymercier'; $username = 'u477330510_familymercier'; $password = 'ZozoEstParti76';
		include("ConnexionSQL.php");
		
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


