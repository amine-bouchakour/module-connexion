<?php session_start();

function connectornot()
{
    
    if(isset($_SESSION['login']))
    
    {
        ?><a href="profil.php"><input class="bor2 input1" type="submit" name="modifierprofil"
        value="modifier profil"></a>
<a href="deconnexion.php"><input class="bor2 input1" type="submit" name="deconnexion" value="Deconnexion"></a><?php
    
        echo '<h1 class="align3">'.'Bienvenue sur notre site '.$_SESSION['login'].' !'.'</h1>'.'<br/>';
    
    }
   
    
    else 
    
    {
        ?><a href="connexion.php"><input class="bor2 input1" type="submit" name="seconnecter" value="Se connecter"></a>
<a href="inscription.php"><input class="bor2 input1" type="submit" name="sinscrire" value="S'inscrire"></a><?php
        
        echo '<p class="align3">'.'Bienvenue sur notre site nouvel(le) aventurier(e) !'.'</p>';
    
    }
}


?>

<html>

<head>
    <meta charset="utf-8">
    <title>Page d'acceuil</title>
    <link rel="stylesheet" href="moduleconnexion1.css" type="text/css">

</head>

<body>

    <header>

        <?php 
            echo connectornot();
        ?>

    </header>


    <main>

        


        <p>
            <h2 class="p1"> " Nous vous présenterons diverses oeuvres artistiques principalement utilisées comme décors
                : <br /> Aussi bien pour de l'animation, du dessin, des illustrations, des bd et bien plus encore ! "
            </h2>
        </p>

        <!-- PHOTO ILLUSTRANT LE DESSINATEUR DECORS -->
        <div class="divimg1">
            <img class="img1" src="https://bit.ly/2XlqKyl" alt="Décors dessin le roi lion">
            <p > <h2 class="ctr"> Qui ne se souviens pas de ce fameux monticule en roche, où symba y est est présenté aux restes du monde pour la 1ere fois  ?</h2> </p>
        </div>

        <!-- IILUSTRATION -->
        <section>

            <!-- TITRE -->
            <div class="titrarticle">
                <h1 class="ali">Qu'est ce qu'une illustration ?</h1>
                <p class="pad">Une illustration est une représentation visuelle de nature graphique ou picturale dont la fonction essentielle sert à amplifier, compléter, décrire ou prolonger un texte.
                Par extension, on parle d'« illustration sonore » à propos de musiques ou de sons venant renforcer un commentaire ou une fiction radiophonique ou cinématographique. L'illustration est le plus souvent inspirée par des textes. On la pratique dans un grand nombre de domaines.</p>
            </div>

            <!-- IMAGE ET EXPLICATION -->
            <div class="divarticle divflexrow">
                
                <div class="div3 divflexcol">
                    <div class="div3img"><img class="img2" src="https://bit.ly/33Yhwum" alt=""></div>
                    <div class="div3texte"><p class="textdiv">Illustration : Diverses</p></div>
                </div>
                <div class="div3 divflexcol">
                    <div class="div3img"><img class="img2" src="https://bit.ly/2NYmzp0" alt=""></div>
                    <div class="div3texte"><p class="textdiv">Illustration : Diverses</p></div>
                </div>
                <div class="div3 divflexcol">
                    <div class="div3img"><img class="img2" src="https://bit.ly/2KyWxXh" alt=""></div>
                    <div class="div3texte"><p class="textdiv">Illustration : Diverses</p></div>
                </div>
            </div>

        </section>


        <!-- ANIMATION -->
        <section>

            <!-- TITRE -->
            <div class="titrarticle">
                <h1 class="ali">Qu'est ce que l'Animation</h1>
                <p class="pad">Le dessin animé est une technique de film d'animation consistant à communiquer aux spectateurs l'illusion de mouvements réels à l'aide de dessins, créés sur divers supports (papier, carton, verre, cello, ordinateur), qui représentent les différentes phases des gestes et physionomies de personnages, anthropomorphes ou animaux, ou d'objets.
                Au Japon, un style particulier de films animés, inspiré des manga, s'est développé et est regroupé sous le terme anime.
                Le dessin animé est surtout connu pour son succès auprès des enfants, même si une grande part de la production ne s'adresse pas qu'à eux.
                </p>
            </div>
            
            <!-- IMAGE ET EXPLICATION -->
            <div class="divarticle divflexrow">
                
                <div class="div3 divflexcol">
                    <div class="div3img"><img class="img2" src="https://bit.ly/37c5aRf" alt=""></div>
                    <div class="div3texte"><p class="textdiv">Décors : Animation, La-haut</p></div>
                </div>
                <div class="div3 divflexcol">
                    <div class="div3img"><img class="img2" src="https://bit.ly/2XmzxA7" alt=""></div>
                    <div class="div3texte"><p class="textdiv">Décors : Animation, Toy story</p></div>
                </div>
                <div class="div3 divflexcol">
                    <div class="div3img"><img class="img2" src="https://bit.ly/2OqOUn1" alt=""></div>
                    <div class="div3texte"><p class="textdiv">Décors : Animation, DBZ</p></div>
                </div>
            </div>

        </section>


        <!-- BD -->
        <section>

             <!-- TITRE -->
             <div class="titrarticle">
                <h1 class="ali">Qu'est ce que la Bande Dessinée (BD) ?</h1>
                <p class="pad">Une bande dessinée (dénomination communément abrégée en BD ou en bédé) est une forme d'expression artistique, souvent désignée comme le « neuvième art », utilisant une juxtaposition de dessins (ou d'autres types d'images fixes, mais pas uniquement photographiques), articulés en séquences narratives et le plus souvent accompagnés de textes (narrations, dialogues, onomatopées). Will Eisner l'a définie (avant l'émergence d'Internet) comme « la principale application de l'art séquentiel au support papier ».</p>
            </div>

            <!-- IMAGE ET EXPLICATION -->
            <div class="divarticle divflexrow">
                
                <div class="div3 divflexcol">
                    <div class="div3img"><img class="img2" src="https://bit.ly/2CTTmoW" alt="lorhan"></div>
                    <div class="div3texte"><p class="textdiv">Planche : Décors, BD Lorhan</p></div>
                </div>
                <div class="div3 divflexcol">
                    <div class="div3img"><img class="img2" src="https://bit.ly/2NVjNB0" alt=""></div>
                    <div class="div3texte"><p class="textdiv">Planche : Décors, BD Astérix</p></div>
                </div>
                <div class="div3 divflexcol">
                    <div class="div3img"><img class="img2" src="https://bit.ly/37i83zU" alt=""></div>
                    <div class="div3texte"><p class="textdiv">Planche : Décors, BD Tintin</p></div>
                </div>
            </div>

        </section>


        <!-- DESSIN -->
        <section>

            <!-- TITRE -->
            <div class="titrarticle">
                <h1 class="ali">Qu'est ce qu'un Dessin ?</h1>
                <p class="pad">Le dessin est une technique de représentation visuelle sur un support plat. Le terme dessin désigne à la fois l'action de dessiner, l'ouvrage graphique qui en résulte, et la forme d'un objet quelconque.
                Le dessin linéaire représente les objets par leurs contours et quelques lignes caractéristiques ; au-delà de cette limite, le dessin se développe en représentant le volume par les ombres, souvent au moyen des hachures, incorpore des couleurs, et rejoint, sans transition nette, la peinture.
                </p>
            </div>

            <!-- IMAGE ET EXPLICATION -->
            <div class="divarticle divflexrow">
                
                <div class="div3 divflexcol">
                    <div class="div3img"><img class="img2" src="https://bit.ly/2pt9mLz" alt=""></div>
                    <div class="div3texte"><p class="textdiv">Décors : Le chateau d'Aladin</p></div>
                </div>
                <div class="div3 divflexcol">
                    <div class="div3img"><img class="img2" src="https://bit.ly/33WECRX" alt=""></div>
                    <div class="div3texte"><p class="textdiv">Décors : La-haut</p></div>
                </div>
                <div class="div3 divflexcol">
                    <div class="div3img"><img class="img2" src="https://bit.ly/2CPJw7D" alt=""></div>
                    <div class="div3texte"><p class="textdiv">Décors : Le chateau ou vit Raiponce</p></div>
                </div>
            </div>

        </section>

    </main>

    <footer>
<p class="ali0">© Copyright 2019 Amine Bouchakour</p>
    </footer>

</body>

<?php




?>



</html>