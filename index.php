<?php 
session_start();
$_SESSION['nom'] = 'MERCIER';
/*setcookie('pseudo','à venir', time() + 365*24*3600, null, null, false, true);*/
?>

<!DOCTYPE html>
<!-- Site familymercier.com commencé le 7 novembre 2020 par Fabrice Mercier
L'objectif est purement pédagogique et de passer du site statique au site dynamique
nouvelle version V.2 en PHP --> 
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylePourFamilyMercier.css" />
        <title>FamilyMercier.com</title>
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
                <!-- le menu est retiré pour ne donner acces au site que par connexion -->
                <!-- <?php in//lude("menu.php"); ?> -->
            </header>
        
            <div id="banniere_image">
                <div id="bannier_description">
                    Les Belledonnes
                    <a href="https://fr.wikipedia.org/wiki/Chaîne_de_Belledonne" class="bouton_rouge">wiki 
                        <img src="images/flecheblanchedroite.png" alt=""/></a>
                </div>
            </div>
        
            <section><!-- Section 2 je suis un grand voyageur-->    
                <article>
                
                    <h1><img src="images/logoV.png" alt="logo V" width="50" height="50" class="ico_categorie" />Je suis un grand voyageur </h1>

                    <?php echo "ligne écrite en PHP."; ?>

                        <p>Blabla de la section 2 . blablabla   bla mmmmmmmmm bbbbbbb rerthrghfh lkelaeer iueurhgkeairura regherg erfoirij djiuzf gueorgkaer gerjgeajgj regajghkerh gjh gjjhgerugh rgjo gaergjaap egjgouhgaojlrjgpi rrghougo fjrhgohghf ncbvjgvayf&tgaehgoivà(i jejgogoaeg riggoginrgooerj kgegjotaprhhrj ldgjreuyou ljglezeu' dkhfurgg ghayryt&"jg erjggh</p>
                        <p>sdfjhdfkv  djv nzefjoc  df nf iusdf iuef s  soyf vgsugdg dkuy dvv sd dfyv  ivdosfyo  fpdhs vdyf zouy zuvyoufyv sydgf idf vusygfudyy iuyvuc  sdfyfy iuvy iyf isydgc udgf izyfiezygc d siyfu sdcg seuf zuyeg czudys  eygusgv qvc oaergyoyv  ouq yoYE OYUVD uydsguzgvae vyfvkGSKDVQEGVYY SgdkzUQYEFAK"YEKDS</p>
                        <p>blablabla   bla mmmmmmmmm bbbbbbb rerthrghfh lkelaeer iueurhgkeairura regherg erfoirij djiuzf gueorgkaer gerjgeajgj regajghkerh gjh gjjhgerugh rgjo gaergjaap egjgouhgaojlrjgpi rrghougo fjrhgohghf ncbvjgvayf&tgaehgoivà(i jejgogoaeg riggoginrgooerj kgegjotaprhhrj ldgjreuyou ljglezeu' dkhfurgg ghayryt&"jg erjggh
                        </p>
                    

                </article>
                <aside>
                    <h1>Connectez-vous<br>
                        <?php echo $_COOKIE['pseudo']; ?></h1>
                        <!-- Objectif : se connecter à la page 1 qui contient le menu que si l'identifiant est manon/maeva/noemie/marie/fabrice et le mot de passe correspondant au prenom. Si c'est pas bon la page 1 renvoie à l'index avec un message "identifiant ou mot de passe inconnu" -->
                    <form method="post" action="traitement.php">
                    <label for="pseudo">votre pseudo</label><br>
                    <input type="text" name="pseudo" id="pseudo" placeholder="fabrice" size="30" maxlength="10" autofocus />
                    <br><br><br>
                    <label for="pass">mot de passe</label><br>
                    <input type="password" name="pass" id="pass" size="30" maxlength="10"/><br><br>
                    
                <input type="submit" name="envoyer"><br>
            </form>

            </aside>
            </section>
        
            <footer>
                <div id="miseAjour">
                    <p>V2 du 29/11/20<br />
                    <a href="#">Me contacter !</a></p>
                </div>
                <div id="mes_photos">
                    <h1>Mes photos</h1>
                        <p>
                        <img src="images/photo1.jpeg" alt="logo V" width="100" height="100" class="mesPhotos" />
                        <img src="images/photo2mini.jpeg" alt="logo V" width="100" height="100" class="mesPhotos" />
                        <img src="images/photo3mini.jpeg" alt="logo V" width="100" height="100" class="mesPhotos" />
                        <img src="images/photo4mini.jpeg" alt="logo V" width="100" height="100" class="mesPhotos" />
                        </p>    
                    
                </div>
                <div id="Recommandes"> <!-- = mes_amis -->
                    <h1>Sites recommandés</h1>
                        <div id="listeSites"> <!-- = listes_amis -->
                        <ul>    
                            <li><a href="#">site1</a></li>
                            <li><a href="#">site2</a></li>
                            <li><a href="#">site3</a></li>
                            <li><a href="#">site4</a></li>    
                        </ul>
                        <ul>
                            <li><a href="#">site5</a></li>
                            <li><a href="#">site6</a></li>
                            <li><a href="#">site7</a></li>
                            <li><a href="#">site8</a></li>
                        </ul>
                    </div> 
                </div>
            </footer>
        </div>
    </body>
</html>



















