<!DOCTYPE html>
<!-- Site familymercier.com commencé le 7 novembre 2020 par Fabrice Mercier
L'objectif est purement pédagogique et de passer du site statique auu site dynamique
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
                <nav>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="page1.php">Page 1</a></li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">...</a></li>
                    </ul>
                </nav>
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
                
                    <h1><img src="images/logoV.png" alt="logo V" width="50" height="50" class="ico_categorie" />Je suis un grand voyageur</h1>

                    <?php echo "ligne écrite en PHP."; ?>

                        <p>Blabla de la section 2 . blablabla   bla mmmmmmmmm bbbbbbb rerthrghfh lkelaeer iueurhgkeairura regherg erfoirij djiuzf gueorgkaer gerjgeajgj regajghkerh gjh gjjhgerugh rgjo gaergjaap egjgouhgaojlrjgpi rrghougo fjrhgohghf ncbvjgvayf&tgaehgoivà(i jejgogoaeg riggoginrgooerj kgegjotaprhhrj ldgjreuyou ljglezeu' dkhfurgg ghayryt&"jg erjggh</p>
                        <p>sdfjhdfkv  djv nzefjoc  df nf iusdf iuef s  soyf vgsugdg dkuy dvv sd dfyv  ivdosfyo  fpdhs vdyf zouy zuvyoufyv sydgf idf vusygfudyy iuyvuc  sdfyfy iuvy iyf isydgc udgf izyfiezygc d siyfu sdcg seuf zuyeg czudys  eygusgv qvc oaergyoyv  ouq yoYE OYUVD uydsguzgvae vyfvkGSKDVQEGVYY SgdkzUQYEFAK"YEKDS</p>
                        <p>blablabla   bla mmmmmmmmm bbbbbbb rerthrghfh lkelaeer iueurhgkeairura regherg erfoirij djiuzf gueorgkaer gerjgeajgj regajghkerh gjh gjjhgerugh rgjo gaergjaap egjgouhgaojlrjgpi rrghougo fjrhgohghf ncbvjgvayf&tgaehgoivà(i jejgogoaeg riggoginrgooerj kgegjotaprhhrj ldgjreuyou ljglezeu' dkhfurgg ghayryt&"jg erjggh
                        </p>
                    

                </article>
                <aside>
                    <h1>À propos de l'auteur</h1>
                        <img src="images/bulle.png" alt="" id="fleche_bulle" />
                        <p id="photo_zozor">
                        <img src="images/zozor.png" alt="Photo de zozor"/>
                        </p>
                        <p>Laissez moi le temps de me présenter : je m'apelle zozor, je suis né le 23 novembre 1965.</p>
                        <p>vous savez tout sur moi</p>
                        <!--
                        <p><img src="facebook.png" alt="Facebook" /><img src="images/twitter.png" alt="Twitter" /><img src="images/vimeo.png" alt="Vimeo" /><img src="images/flickr.png" alt="Flickr" /><img src="images/rss.png" alt="RSS" /></p>-->
                </aside>
            </section>
        
            <footer>
                <div id="miseAjour">
                    <p>V2 <br/>le 29 novembre 2020<br />
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



















