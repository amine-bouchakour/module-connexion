

<!-- Une page permettant de modifier son profil (profil.php) :
Cette page possède un formulaire permettant à l’utilisateur de modifier ses
informations. Ce formulaire est par défaut pré-rempli avec les informations
qui sont actuellement stockées en base de données. -->

<!-- FORMULAIRE D'INSCRIPTION PREEREMPLI A MODIFIER-->



<?php
session_start();

//Requete sur TOUTES les infos
$connexion = mysqli_connect("localhost","root","","moduleconnexion");
$requete = "SELECT `login`,`prenom`,`nom`,`password` FROM `utilisateurs` ORDER BY `utilisateurs`.`Id` ASC";
$query = mysqli_query($connexion,$requete);
$resultat= mysqli_fetch_all($query);




?>


<html>

<h1> Page Profil </h1>

<form action="connexion.php" name="modification" method="post">

<label for="login">Login : </label> <input type="text" name="login" value="<?php echo $resultat[0][0] ; ?>" required><br>
<label for="prenom">Prénom : </label> <input type="text" name="prenom" value="<?php echo $resultat[0][2] ; ?>"  required><br>
<label for="nom">Nom : </label> <input type="text" name="nom" value="<?php echo $resultat[0][2] ; ?>"><br>
<label for="password">Password : </label> <input type="text" name="password" value=" <?php echo $resultat[0][3] ; ?>"  required><br>
<label for="confirmpassword">Confirmation password :</label>  <input type="text" name="confirmpassword" value="<?php echo $resultat[0][3]; ?>" required><br>
<input type="submit" name="submit" value="Modifier"><br>
</form>

<?php



?>


</html>