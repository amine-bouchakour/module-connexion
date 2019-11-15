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


    <main>

        <?php echo '<h1>'.'Bienvenue sur notre site '.$_SESSION['login'].' !'.'</h1>'.'<br/>';
        
        
        
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