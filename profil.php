

<!-- Une page permettant de modifier son profil (profil.php) :
Cette page possède un formulaire permettant à l’utilisateur de modifier ses
informations. Ce formulaire est par défaut pré-rempli avec les informations
qui sont actuellement stockées en base de données. -->

<!-- FORMULAIRE D'INSCRIPTION PREEREMPLI A MODIFIER-->



<?php
session_start();
session_destroy();

session_start();
$_SESSION ['prenom']=$_POST['prenom'];
$_SESSION ['nom']=$_POST['nom'];
$_SESSION ['login']= $_POST['login'];
$_SESSION ['password']=$_POST['password'];
$_SESSION ['confirmpassword']=$_POST['confirmpassword'];





//Requete sur TOUTES les infos
$connexion = mysqli_connect("localhost","root","","moduleconnexion");
$requete = "SELECT `login`,`prenom`,`nom`,`password` FROM `utilisateurs` ORDER BY `utilisateurs`.`Id` ASC";
$query = mysqli_query($connexion,$requete);
$resultat= mysqli_fetch_all($query);


$connexion1 = mysqli_connect("localhost","root","","moduleconnexion");
$requete1 = "UPDATE utilisateurs
SET login = '$_POST[login]',
  prenom = '$_POST[prenom]',
  nom = '$_POST[nom]',
  password = '$_POST[password]'
WHERE id = 193";
$query1 = mysqli_query($connexion1,$requete1);

//  $resultat1= mysqli_fetch_all($query1);





?>


<html>

<h1> Page Profil </h1>

<form action="profil.php" name="modification" method="post">

<label for="login">Login : </label> <input type="text" name="login" placeholder="<?php echo $resultat[3][0] ; ?>" value="" required><br>
<label for="prenom">Prénom : </label> <input type="text" name="prenom" placeholder="<?php echo $resultat[3][1] ; ?>" value=""  required><br>
<label for="nom">Nom : </label> <input type="text" name="nom" placeholder="<?php echo $resultat[3][2] ; ?>" value=""><br>
<label for="password">Password : </label> <input type="text" name="password" placeholder=" <?php echo $resultat[3][3] ; ?>" value=""  required><br>
<label for="confirmpassword">Confirmation password :</label>  <input type="text" name="confirmpassword" placeholder="<?php echo $resultat[3][3]; ?>" value="" required><br>
<input type="submit" name="submit" value="Modifier"><br>
</form>



<?php

echo 'Bienvenue à toi '.$_SESSION['login'].' '.$_SESSION['prenom'].'<br/>';

?>


</html>