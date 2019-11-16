<?php session_start();

function connectornot()
{
    
    if(isset($_SESSION['login']))
    
    {
        ?><a href="profil.php"><input class="bor2 input1" type="submit" name="modifierprofil" value="modifier profil"></a>
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


        </header>

        
        <main>

            <?php 
                echo connectornot();
            ?>
    


        </main>

        <footer>

        </footer>

    </body>




</html>



