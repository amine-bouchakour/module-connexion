<html>


<head>
    <meta charset="utf-8">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="moduleconnexion.css">
    
</head>

<header>

</header>

<body>
    
<main>

<h1> Page Connexion </h1>

<div class="formulaire">
<!-- FORMULAIRE CONNEXION DE TYPE POST  -->
<form class="flexrow" action="connexion.php" name="connexion" method="post">
<input type="text" name="login" placeholder="Login" value="" > <br>
<input type="password" name='password' placeholder="Password" value=""> <br> 
<div class='boutonenvoyer'><input type="submit" name="connexion" value='Se connecter'>
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
    
    else
    {
        echo 'Identification incorrecte'.'<br/>';
    }
}

?>

</main>

</body>

<footer>

</footer>

</html>