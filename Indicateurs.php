<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylePourFamilyMercier.css" />
        <title>familymercier.com Indicateurs</title>
    </head>

    <body>
        <header>
        <div id="titrePrincipal">
        <div id="logo">
        <h1>Indicateurs<br></h1>
        <p><br><p>
        </div>
        </div>
    
        <?php include("menu.php"); ?>
    
    </header>
        
        <section>
            <article>

            <h2>Bonjour <?php echo $_COOKIE['pseudo']; ?>!</h2>
            
            <p>
            Quelques indicateurs clés, toutes les données sont visibles dans l'onglet DONNEES.
            </p>

            <?php
            include("ConnexionSQL.php");
            
            // Présentation des variations de température

            $reponse = $bdd->query('SELECT year(`date`) , min(TempEau), round(AVG(TempEau)), MAX(TempEau), round(STDDEV(TempEau)) FROM Piscine GROUP by year(`Date`)');
            ?>
            <table>
                <p>Evolution de la température de l'eau</p>
                <tr>
                    <th width="60">year</th>
                    <th width="40">min</th>
                    <th width="60">moy</th>
                    <th width="50">max</th>
                    <th width="50">EType</th>

                </tr>
            <?php
            while ($donnees = $reponse->fetch())
            {
                echo 
                '<tr><td>' . $donnees['year(`date`)'] . '</td><td>' . $donnees['min(TempEau)'] . '</td><td>' . $donnees['round(AVG(TempEau))'] 
                . '</td><td>' . $donnees['MAX(TempEau)'] . '</td><td>' . $donnees['round(STDDEV(TempEau))'] . '</td></tr>';
            }
            echo '</table>';

            // Présentation des variations de niveau

            $reponse = $bdd->query('SELECT year(`date`) , min(NiveauEau), round(AVG(NiveauEau)), MAX(NiveauEau), round(STDDEV(NiveauEau)) FROM Piscine GROUP by year(`Date`)');
            ?>
            <table>
                <p>Evolution du niveau d'eau</p>
                <tr>
                    <th width="60">year</th>
                    <th width="40">min</th>
                    <th width="60">moy</th>
                    <th width="50">max</th>
                    <th width="50">EType</th>

                </tr>
            <?php
            while ($donnees = $reponse->fetch())
            {
                echo 
                '<tr><td>' . $donnees['year(`date`)'] . '</td><td>' . $donnees['min(NiveauEau)'] . '</td><td>' . $donnees['round(AVG(NiveauEau))'] 
                . '</td><td>' . $donnees['MAX(NiveauEau)'] . '</td><td>' . $donnees['round(STDDEV(NiveauEau))'] . '</td></tr>';
            }
            echo '</table>';





            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>  

            </article>
        
        </section>
        <!-- pied de page commun-->
        <?php include("footer.php"); ?>

    </body>
</html>
