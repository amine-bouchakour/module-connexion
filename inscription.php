<?php

session_start();

    $_SESSION ['prenom']=$_POST['prenom'];
    $_SESSION ['nom']=$_POST['nom'];
    $_SESSION ['login']= $_POST['login'];
    $_SESSION ['password']=$_POST['password'];
    $_SESSION ['confirmpassword']=$_POST['confirmpassword'];

    // $connexion = mysqli_connect("localhost","root","","moduleconnexion");
    // $requete = "SELECT max(Id) FROM utilisateurs";
    // $query = mysqli_query($connexion,$requete);
    // $resultat= mysqli_fetch_all($query);

    // $_SESSION ['ID']= $resultat;

    

?>


<html>

<h1> Page Inscription </h1>

<!--
- Une page contenant un formulaire d’inscription (inscription.php) :
Le formulaire doit contenir l’ensemble des champs présents dans la table
“utilisateurs” (sauf “id”) + une confirmation de mot de passe. Dès qu’un
utilisateur remplit ce formulaire, les données sont insérées dans la base de
données et l’utilisateur est redirigé vers la page de connexion. -->

<!-- FORMULAIRE D'INSCRIPTION -->


<form action="inscription.php" name="inscription" method="post">

<label for="login">Login :</label> <input type="text" name="login" value="" ><br>
<label for="prenom">Prénom :</label> <input type="text" name="prenom" value="" ><br>
<label for="nom">Nom :</label> <input type="text" name="nom" value="" ><br>
<label for="password">Password :</label> <input type="text" name="password" value="" ><br>
<label for="confirmpassword">Confirmation password :</label> <input type="text" name="confirmpassword" value="" ><br>
<input type="submit" name="submit" value="S'inscrire"><br>
</form>






<?php




// CONDITION TOUT LES CHAMPS REMPLI/ AVEC PASSWORD!=CONFIRMPASSWORD/ OU AUCUNE VALEURS ENTREE

if($_POST['prenom']=='admin' and $_POST['nom']=='admin' and $_POST['login']=='admin' and $_POST['password']=='admin' and $_POST['confirmpassword']=='admin')
{
    echo 'bienvenue administrateur !'.'<br/>';
}

if ($_POST['prenom'] and $_POST['nom'] and $_POST['login'] and $_POST['password'] and $_POST['confirmpassword'] and ($_POST['password'] == $_POST['confirmpassword']))

{
    echo 'Félicitation ! le formulaire a bien été rempli !'.'</br>';
    

    $connexion = mysqli_connect("localhost","root","","moduleconnexion");
    $requete = "INSERT INTO `utilisateurs` (`login`, `prenom`, `nom`, `password`) VALUES ('$_SESSION[login]', '$_SESSION[prenom]', '$_SESSION[nom]', '$_SESSION[password]')";
    $query = mysqli_query($connexion,$requete);
    //header ('location : connexion.php');
    
}

else if($_POST['prenom'] and $_POST['nom'] and  $_POST['login'] and $_POST['password'] and $_POST['confirmpassword'] and ($_POST['password'] != $_POST['confirmpassword']))
{
    echo 'Le password et la confirmation du password sont différents'.'</br>';    
}
else
{
    echo 'Veuillez svp remplir le formulaire entièrement'.'</br>';
}




?>

</html>