<!DOCTYPE html>
<!-- L'objectif de cette page est d'afficher toutes les données disponibles pour la piscine classé par date
il est aussi possible d'accéder à la page pour créer un enregistrement  -->
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylePourFamilyMercier.css" />
        <title>familymercier.com données</title>
    </head>
    <header>
        <div id="titrePrincipal">
        <h1>Toutes les données disponibles<br></h1>
        <a href="saisiePiscine.php">Enregistrer des données</a><br>
        </div>
    
        <?php include("menu.php"); ?>
    
    </header>
	<body>
		<br><br>
		<?php
		
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
    		. '</td><td>' . $donnees['AjoutEau'] .' mm' . '</td><td>' . $donnees['NumFiltre'] . '</td><td>' . htmlspecialchars($donnees['Remarque'])
    		. '</td></tr>';
		}
		echo '</table>';
		$reponse->closeCursor(); // Termine le traitement de la requête
		?>	
    </body>

</html>


