

                
            <?php
            
            include("ConnexionSQL.php"); // pour ouvrir la base

            $req = $bdd->prepare('INSERT INTO Piscine (NiveauEau, ClMesure, PhMesure, TempEau, TpsPompe, AjoutCl, PlusPh, MoinsPh, AjoutEau, NumFiltre, Remarque) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
               
            $req->execute(array(-$_POST['NiveauEau'], $_POST['ClMesure'], $_POST['PhMesure'], $_POST['TempEau'], $_POST['TpsPompe'], $_POST['AjoutCl'], $_POST['PlusPh'], $_POST['MoinsPh'], $_POST['AjoutEau'], $_POST['NumFiltre'], $_POST['Remarque']));

            //$reponse->closeCursor(); // Termine le traitement de la requête
            header('Location: VisuDonnees.php');
            
            ?> 

    
                
        


















