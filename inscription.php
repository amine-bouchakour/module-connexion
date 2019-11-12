<?php

session_start();

$_SESSION ['login']=$_POST['login'];
$_SESSION ['prenom']=$_POST['prenom'];
$_SESSION ['nom']=$_POST['nom'];
$_SESSION ['password']=$_POST['password'];
$_SESSION ['confirmpassword']=$_POST['confirmpassword'];


?>


<html>

<!--
- Une page contenant un formulaire d’inscription (inscription.php) :
Le formulaire doit contenir l’ensemble des champs présents dans la table
“utilisateurs” (sauf “id”) + une confirmation de mot de passe. Dès qu’un
utilisateur remplit ce formulaire, les données sont insérées dans la base de
données et l’utilisateur est redirigé vers la page de connexion. -->

<!-- FORMULAIRE D'INSCRIPTION -->


<form action="inscription.php" name="inscription" method="post">

Login : <input type="text" name="login" value=""><br>
Prenom : <input type="text" name="prenom" value=""><br>
Nom : <input type="text" name="nom" value=""><br>
Password : <input type="text" name="password" value=""><br>
Confirmation password : <input type="text" name="confirmpassword" value=""><br>
<input type="submit" name="submit" value="S'inscrire"><br>
</form>

<?php

//Requete sur TOUTES les infos
$connexion = mysqli_connect("localhost","root","","moduleconnexion");
$requete = "SELECT * FROM `utilisateurs`";
$query = mysqli_query($connexion,$requete);
$resultat= mysqli_fetch_all($query);



// CONDITION TOUT LES CHAMPS REMPLI/ AVEC PASSWORD!=CONFIRMPASSWORD/ OU AUCUNE VALEURS ENTREE
if ($_POST['prenom'] and $_POST['nom'] and $_POST['login'] and $_POST['password'] and $_POST['confirmpassword'])
{
    echo 'Félicitation le formulaire est remplis !'.'</br>';
}

else if($_POST['password'] != $_POST['confirmpassword'])
{
    echo 'Le password et la confirmation du password sont différents'.'</br>';
}
else
{
    echo 'Veuillez remplir le formulaire entièrement'.'</br>';
}


?>

</html>