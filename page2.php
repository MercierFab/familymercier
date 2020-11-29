<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylePourFamilyMercier.css" />
        <title>Page 1 - FamilyMercier</title>
    </head>

    <body>
        <header>
            <div id="titrePrincipal">
                <div id="logo">
                <h1>Mon Super site - page Dynamique</h1>
                </div>
            </div>

            <!-- mettre le menu ici -->
            <?php include("menu.php"); ?>


        </header>
        <br>
        
        <section>
            <article>

            <h2>affichage de texte avec PHP</h2>
            <p>
                Cette ligne est écrite en HTML.<br>
                <?php echo "ligne écrite en PHP."; ?>

            </p>

            <h2>calculs PHP</h2>
            <p>
                <?php
                $ageDuVisiteur = 10;
                echo 'age du visiteur = ';
                $NomDuVisiteur = "c'est moi <br>";
                echo $ageDuVisiteur;
                echo $NomDuVisiteur;


                $coordonnees = array (
                'prenom' => 'François',
                'nom' => 'Dupont',
                'adresse' => '3 Rue du Paradis',
                'ville' => 'Marseille');
                $coordonnees = array (
                'prenom' => 'Sophie',
                'nom' => 'Durand',
                'adresse' => '3 allee de la gare',
                'ville' => 'Meylan');

                foreach($coordonnees as $cle => $element)
                {
                echo '[' . $cle . '] vaut ' . $element . '<br />';
                }
                ?>

            </p>
            
            <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i'); ?>.</p>

            </article>
            <aside>
            <form method="post" action="traitement.php">
                    <label for="pseudo">Votre pseudo</label>
                    <input type="text" name="pseudo" id="pseudo" placeholder="Ex : Zozor" size="30" maxlength="10" autofocus />
                    <br>
                    <label for="pass">   mot de passe</label>
                    <input type="password" name="pass" id="pass" size="30" maxlength="10"/>
                    <br /><br />
                    <textarea class="boiteTrad" name="traduction" id="traduction">tu peux écrire la traduction ici (te toute façon ça ne sert à rien pour l'instant)</textarea>
                    <br /><br />
                    <input type="checkbox" name="genreF" id="genreF"/><label for="genreF">fini</label>
                    <input type="checkbox" name="genreM" id="genreM"/><label2 for="genreFM">pas fini</label2><br /><br />
            
                    <label for="pays">Dans quel pays habitez-vous ?</label>
                    <select name="pays" id="pays">
                        <optgroup label="Europe">
                            <option value="france">France</option>
                            <option value="espagne">Espagne</option>
                            <option value="italie">Italie</option>
                            <option value="royaume-uni">Royaume-Uni</option>
                        </optgroup>
                        <optgroup label="Amérique">
                            <option value="canada">Canada</option>
                            <option value="etats-unis">Etats-Unis</option>
                            </optgroup>
                            <optgroup label="Asie">
                            <option value="chine">Chine</option>
                            <option value="japon">Japon</option>
                        </optgroup>
                    </select>
                    <br><br>
                <input type="submit" name="envoyer">
            </form>
            </aside>
        </section>
        
        <!-- pied de page commun aux autres pages sauf le sommaire --> 
        <?php include("piedDePage.php"); ?>
    
    </body>
</html>
