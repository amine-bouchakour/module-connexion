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
<input type="submit" name="deconnexion" value="deconnexion">
    
</form>
    <main>

        <?php 
        
        if($_SESSION['login'])

        {
            echo '<h1>'.'Bienvenue sur notre site '.$_SESSION['login'].' !'.'</h1>'.'<br/>';
        }

        
        
        if(isset($_POST['deconnexion']))
        {
            session_start();
            session_destroy();
            header ('Location:connexion.php');
        }
        
        ?>





    </main>

    <footer>

    </footer>

</body>




</html>

<input type="submit" name="modifierprofil" value="modifier profil"></div>

// CONDITION ET LIEN POUR MODIFIER PROFIL
    if(isset($_POST['modifierprofil'])==true)
    {
        header ('Location:profil.php');
    }