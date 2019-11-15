<?php session_start(); ?>

<!doctype html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Page d'acceuil</title>
        <link rel="stylesheet" href="moduleconnexion.css">
        
    </head>

    <body>

        <header>


        </header>

            <form action="" method="post">
            
            <input type="submit" name="seconnecter" value="Se connecter">
            <input type="submit" name="sinscrire" value="S'inscrire">
            <input type="submit" name="modifierprofil" value="modifier profil">
            <input type="submit" name="deconnexion" value="Deconnexion">
            </form>
        
        <main>

            <?php 
            if($_SESSION['login'])

            {
                
                {
                    echo '<h1>'.'Bienvenue sur notre site '.$_SESSION['login'].' !'.'</h1>'.'<br/>';
                }

                if(isset($_POST['deconnexion']))
                    {
                        session_start();
                        session_destroy();
                        header ('Location:index.php');
                    }

                

                if(isset($_POST['modifierprofil']))
                    {
                        header ('Location:profil.php');
                    }
            }



            else 

            {
                
                if(isset($_POST['seconnecter']))
                    {
                        header ('Location:connexion.php');
                    }
                
                echo '<h1>'.'Bienvenue sur notre site nouvel aventurier !'.'</h1>';

                if(isset($_POST['sinscrire']))
                    {
                        header ('Location:inscription.php');
                    }

            }
            ?>
    
            
            





        </main>

        <footer>

        </footer>

    </body>




</html>



if(isset($_POST['seconnecter']))
                    {
                        header ('Location:connexion.php');
                    }

                if(isset($_POST['sinscrire']))
                    {
                        header ('Location:inscription.php');
                    }