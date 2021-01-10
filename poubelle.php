// je vais mettre ici tous les essais non aboutis en attente de solution

<?php

			// essais du 9 janvier
			// Objectif : se connecter à distance à la base serveur Hostinger
			// le serveur renvoit systématiquement une info comme si je me connectais à ma propre adress IP : genre effet Boomrang
			Erreur : SQLSTATE[HY000] [1045] Access denied for user 'u477330510'@'2a01:cb15:802c:8c00:5dce:8ff6:e8d7:797b' (using password: YES)
			// l'adresse IPv6 est mon adresse IP alors qu'elle devrait être celle du serveur : 185.224.137.151

			//$bdd = new PDO('mysql:host=sql151.main-hosting.eu;dbname=u477330510_1EKR5;charset=utf8', 'u477330510', 'loslos!38', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); >> la proposition de départ

			//$bdd = new PDO('mysql:host=185.224.137.151;dbname=u477330510_1EKR5;charset=utf8', 'u477330510', 'Lukkas!Paris75', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); >> SQLSTATE[HY000] [1045] Access denied for user 'u477330510'@'90.112.34.121' (using password: YES)


			//$bdd = new PDO('mysql:host=toto;dbname=u477330510_1EKR5;charset=utf8', 'u477330510', 'Lukkas!Paris75', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			//Erreur : SQLSTATE[HY000] [2002] php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known

			//$bdd = new PDO('mysql:host=sql151.main-hosting.eu;dbname=u477330510_1EKR5;charset=utf8', 'u477330510', 'Lukkas!Paris75', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			$serverIP = '185.224.137.151';
			$port = 3306;
			$database = 'u477330510_1EKR5';
			$servername = 'sql151.main-hosting.eu';
			$username = 'u47733051';
			$password = 'Lukkas!Paris75';
			//$conn = mysqli_connect($servername, $username, $password);
			//if($conn) {echo "connection OK";} else {echo "connection NOK";} ;


			//$bdd = new PDO('mysql:dbname=u477330510_1EKR5 ; host =sql151.main-hosting.eu' , $username, $password , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

			//$bdd = new PDO('mysql:dbname=' . $database . ';host =' . $servername . ';port=' . $port , $username, $password , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

			//$bdd = new PDO('mysql:host=localhost;dbname=FamilyMercier;charset=utf8', 'root', 'Loslos!38', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

			// celui qui fonctionne en local


?>


