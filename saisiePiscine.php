<!DOCTYPE html>
<!-- l'objectif de cette page est de renseigner la base de données piscine apres un nettoyage
rentrer l'ensemble des valeurs avec un téléphone portable à la date du jour 
je vérifie que la date du jour n'est pas déjà renseignée avant tout -->

<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylePourFamilyMercier.css" />
        <title>FamilyMercier.com Saisie Données</title>
    </head>
    <?php
        // vérifier que la date du jour n'est pas déjà présente dans le tableau piscine
        include("ConnexionSQL.php"); // pour ouvrir la base
        $reponse = $bdd->query('SELECT COUNT(Date) AS num FROM Piscine WHERE Date=CURRENT_DATE');
        $donnees = $reponse->fetch();
        $num_ligne = $donnees['num'];

        if ($num_ligne >= 1)
            { 
                echo 'La date du jour est déjà renseignée.<br>Attendre demain ou supprimer l\'enregistrement.<br>';
                $reponse->closeCursor(); // Termine le traitement de la requête avant de sortir
                echo '<a href="VisuDonnees.php">Retour à la page données</a>';
                exit();
            }
    ?>
    <body>
        <p>Entrer des données à la date d'aujourd'hui :<p>
        <section>
            <form method="post" action="saisiePiscinePost.php">
                <fieldset>
                <label for="NiveauEau">NivEau(-)</label><br><input type="number" name="NiveauEau" id="NiveauEau" value="0" min="0" max="2000"/><br>
                <label for="ClMesure">Cl</label><br><select name="ClMesure" id="ClMesure"><br>
                    <option value="0">0</option>
                    <option value="0.3">0.3</option>
                    <option value="1">1</option>
                    <option value="1.5">1.5</option>
                    <option value="3">3</option>
                <br>
                </select><br>
                <label for="PhMesure">Ph</label><br><select name="PhMesure" id="PhMesure"><br>
                    <option value="0">0</option>
                    <option value="6.8">6.8</option>
                    <option value="7">7</option>
                    <option value="7.2">7.2</option>
                </select><br>
                <label for="TempEau">TempEau</label><br><input type="number" name="TempEau" id="TempEau" min="0" max="100" value="0" width="200" /><br>
                <label for="TpsPompe">TpsPompe</label><br><input type="number" name="TpsPompe" id="TpsPompe" min="0" max="24" value="0" width="80" /><br>
                <label for="AjoutCl">AjoutCl</label><br><input type="number" name="AjoutCl" id="AjoutCl" min="0" max="100" value="0" width="60" /><br>
                <label for="PlusPh">PlusPh</label><br><input type="number" name="PlusPh" id="PlusPh" min="0" max="10000" value="0" /><br>
                <label for="MoinsPh">MoinsPh</label><br><input type="number" name="MoinsPh" id="MoinsPh" min="0" max="10000" value="0" /><br>
                <label for="AjoutEau">AjoutEau</label><br><input type="number" name="AjoutEau" id="AjoutEau" min="-10000" max="10000" value="0" /><br>
                <label for="NumFiltre">NumFiltre</label><br><input type="number" name="NumFiltre" id="NumFiltre" min="0" max="100" value="0" /><br>
                <label for="Remarque">Remarque</label><br><input type="text" name="Remarque" id="Remarque" size="20" height="20" /><br>
                </fieldset>
                <input type="submit" value="Envoyer">
            </form>
            <br>    
        </section>
        <a href="VisuDonnees.php">Retour à la page données</a>
    </body>
</html>



















