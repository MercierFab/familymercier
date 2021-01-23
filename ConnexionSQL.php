<!-- Connection à la base de données mercierfamily sur le serveur hostinger -->

<?php

// Connexion à la base SQL du serveur utilisé pour le site familymercier.com
// la base de données du serveur hostinger est accessible depuis l'ordi pour les tests
// il faut juste indiquer  $host = 'localhost' pour le serveur
// attention de bien autoriser "n'imprte quel hôte" dans hostinger my sql à distance
// l'IP change derrière la BOX


try
		{
		// pour le serveur
		//$host = 'localhost'; 

		//pour l'ordi 
		$host = 'sql151.main-hosting.eu'; 

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