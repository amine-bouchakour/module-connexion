<html>


<head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="moduleconnexion1.css" type="text/css">
    
</head>


<body class="body1">
    
<main>

<p class="titre2">Connexion</p>

<!-- FORMULAIRE CONNEXION DE TYPE POST  -->
<div class="formulaire">
<form class="flexrow" action="connexion.php" name="connexion" method="post">
<input class="bor" type="text" name="login" placeholder="Login" value="" > <br>
<input class="bor" type="password" name='password' placeholder="Password" value=""> <br> 
<div class='boutonenvoyer'><input class="bor1" type="submit" name="connexion" value='Se connecter'>
</form>
<p class="align1"><?php verificationconnexion() ?></p>
</div>


                        <!-- PHP -->
<?php
session_start();



function verificationconnexion()

{

    // REQUETE INFORMATION SUR TOUT LES UTLISATEURS
    $connexion = mysqli_connect("localhost","root","","moduleconnexion");
    $requete = "SELECT * FROM utilisateurs";
    $query = mysqli_query($connexion,$requete);
    $resultat= mysqli_fetch_all($query);

    // CONDITION VERIFICATION SI LOGIN && PASSWORD EXISTE DANS BDD MySQL POUR OUVERTURE DE SESSION SUR PAGE INDEX.PHP
    $compte=false;
    if(isset($_POST['connexion'])==true)
    {
        
        foreach($resultat as $key =>$value)
        {
            
            if($resultat[$key][1] == $_POST['login'] && $resultat[$key][4] == $_POST['password'])
            {
                $compte = true;
            }
        }
    }
    
    if($compte== true)
    {
        session_start();
        $_SESSION['login'] = $_POST['login'];
        echo 'Bienvenue '.$_SESSION['login'].'<br/>';
        header ('Location:index.php');
    }

    if(isset($_POST['connexion'])==false)
    {
        echo 'Veuillez saisir vos identifiants';
    }

    else
    {
        echo '<p class="color">'.'Identification incorrecte'.'</p>'.'<br/>';
    }
}

?>

</main>

</body>

<footer>

</footer>

</html>