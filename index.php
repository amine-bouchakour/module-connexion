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
            <h2 class="p1"> " Nous vous présenterons diverses oeuvres artistiques principalement           utilisées comme décors
                : <br /> Aussi bien pour de l'animation, du dessin, des illustrations, des bd et bien plus encore ! "
            </h2>
        </p>

        <!-- PHOTO ILLUSTRANT LE DESSINATEUR DECORS -->
        <div class="divimg1">
            <img class="img1" src="https://bit.ly/2XlqKyl" alt="Décors dessin le roi lion">
            <p > <h2 class="ctr"> Qui ne se souviens pas de ce fameux monticule en roche, où symba y        est est présenté aux restes des animaux pour la 1ere fois  ?</h2> </p>
        </div>

        <!-- IILUSTRATION -->
        <section>

            <!-- TITRE -->
            <div class="titrarticle">
                IILUSTRATION
            </div>

            <!-- IMAGE ET EXPLICATION -->
            <div class="divarticle">
                IMAGE ET EXPLICATION IILUSTRATION
            </div>

        </section>


        <!-- ANIMATION -->
        <section>

            <!-- TITRE -->
            <div class="titrarticle">
                ANIMATION
            </div>
            
            <!-- IMAGE ET EXPLICATION -->
            <div class="divarticle">
                IMAGE ET EXPLICATION ANIMATION
            </div>

        </section>


        <!-- BD -->
        <section>

             <!-- TITRE -->
             <div class="titrarticle">
                BD
            </div>

            <!-- IMAGE ET EXPLICATION -->
            <div class="divarticle">
                IMAGE ET EXPLICATION BD
            </div>

        </section>


        <!-- DESSIN -->
        <section>

            <!-- TITRE -->
            <div class="titrarticle">
                DESSIN
            </div>

            <!-- IMAGE ET EXPLICATION -->
            <div class="divarticle">
                IMAGE ET EXPLICATION DESSIN
            </div>

        </section>

    </main>

    <footer>

    </footer>

</body>

<?php




?>



</html>