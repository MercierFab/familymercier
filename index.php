<?php 
session_start();
//$_SESSION['nom'] = 'MERCIER';
setcookie('pseudo','---', time() + 365*24*3600, null, null, false, true);
?>

<!DOCTYPE html>
<!-- Site familymercier.com commencé le 7 novembre 2020 par Fabrice Mercier
les futures évolutions envisagées :
- gérer et mémoriser les acces
- sécuriser le site https... aller plus loin
- gérer correctement les cookies sans le réeffacer
- orienter le site vers Lora... ça doit devenir l'atractivité
- jointer les bases
- arriver à calculer un temps entre chaque enregistrement
- faire du code Python (courbes?)
- code script ?
- automatiser le test du code (si c'est possible)
--> 
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylePourFamilyMercier.css" />
        <title>FamilyMercier.com menu principal</title>
    </head>

    <body>
        <div id="blocPage"> <!-- Le bloc principal (main_wrapper) qui englobe l'ensemble de la page, permettra de centrer la page-->
            <header>
                <div id="titrePrincipal">
                    <div id="logo">
                        <img src="images/logoF.png" alt="logo F" width="50" height="50">
                        <a href="FamilyMercier.com">familymercier.com</a>
                    </div>
                </div>
                
            </header>
        
            <div id="banniere_image">
                <div id="bannier_description">
                    Les Belledonnes
                    <a href="https://fr.wikipedia.org/wiki/Chaîne_de_Belledonne" class="bouton_rouge">wiki 
                        <img src="images/flecheblanchedroite.png" alt=""/></a>
                </div>
            </div>
        
            <section>   
                <article>
                
                    <h1><img src="images/logoV.png" alt="logo V" width="50" height="50" class="ico_categorie" />Un site pédagogique</h1>


                        <p>L'objectif est de tester les langages et méthodes qui permettent de faire vivre un site Internet interactif. </p>
                        <p>Pour commencer le HTML et CSV pour l'affichage et la mise en page. Puis le PHP, SQL et Python pour travailler les données et rendre le site interessant.</p>
                        <p>L'objectif ultime est d'alimenter une base de données directement par un capteur accessible par le réseau LORAWan. Le tout hébergé sur un serveur et accessible depuis n'importe quel ordinateur.</p>
                        <p>Sans oublier la dose de sécurité indispensable.</p>
                        <p>L'ensemble des programmes est disponible sur Github.</p>
                        <p>Les données utilisées sont celles d'une piscine.</p> 
                        </p>
                    

                </article>
                <aside>
                    <h1>Connectez-vous<br>
                    <?php echo $_COOKIE['pseudo']; ?></h1>    
                    <form method="post" action="traitement.php">
                    <label for="pseudo">Votre nom ?</label><br>
                    <input type="text" name="pseudo" id="pseudo" placeholder="infosite" size="30" maxlength="10" autofocus />
                    <br><br><br>
                    <!-- on va oublier temporairement le mot de passe
                    <label for="pass">mot de passe</label><br>
                    <input type="password" name="pass" id="pass" size="30" maxlength="10"/><br><br>-->
                    
                    <input type="submit" name="envoyer"><br>
                    </form>

                </aside>
            </section>

             <?php include("footer.php"); ?>
        
        </div>
    </body>
</html>



















