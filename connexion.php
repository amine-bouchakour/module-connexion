<html>

<h1> Page Connexion </h1>

<!-- FORMULAIRE CONNEXION DE TYPE POST  -->
<form action="connexion.php" name="connexion" method="post">
<label for="login">Login :</label> <input type="text" name="login" value="" > <br>
<label for="password">Password :</label> <input type="text" name='password' value=""> <br>
<input type="submit" name="connexion">
<input type="submit" name="modifierprofil" value="modifier profil">
</form>



                        <!-- PHP -->
<?php

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
        if($resultat[$key][1] == $_POST['login'] && $resultat[$key][4]== $_POST['password'])
        {
            $compte =true;
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

// CONDITION ET LIEN POUR MODIFIER PROFIL
if(isset($_POST['modifierprofil'])==true)
{
    header ('Location:profil.php');
}

?>

</html>