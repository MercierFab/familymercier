<!-- Paramètres de connection à la base de données -->

<?php

// Connexion à la base SQL du serveur utilisé pour le site familymercier.com
// Il faut pour l'instant paramétrer manuellement le host en attendant le IF qui va bien

try
		{

		// pour le serveur
		//$host = 'localhost'; 

		// pour l'ordi
		$host = 'sql151.main-hosting.eu'; 

		// paramètres communs à l'ordi et au serveur
		$dbname = 'u477330510_familymercier'; 
		$username = 'u477330510_familymercier'; 
		$password = 'ZozoEstParti76';

		$bdd = new PDO("mysql:host=$host;dbname=$dbname" , $username, $password);
		$bdd->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

		}
		// le bloc try essaye d'ouvrir la base et rentre dans le bloc catch en cas de problème
		catch(Exception $e)
		{
			// En cas d'erreur, on affiche un message et on arrête tout
 	       die('Erreur : '.$e->getMessage());
		}


?>