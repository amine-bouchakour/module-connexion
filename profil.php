

<!-- Une page permettant de modifier son profil (profil.php) :
Cette page possède un formulaire permettant à l’utilisateur de modifier ses
informations. Ce formulaire est par défaut pré-rempli avec les informations
qui sont actuellement stockées en base de données. -->

<!-- FORMULAIRE D'INSCRIPTION PREEREMPLI A MODIFIER-->



<?php
session_start();




?>


<html>

<form action="inscription.php" name="inscription" method="post">

Login : <input type="text" name="login" value="<?php echo $_SESSION['login'] ; ?>"><br>
Prenom : <input type="text" name="prenom" value="<?php echo $_SESSION['prenom'] ; ?>"><br>
Nom : <input type="text" name="nom" value="<?php echo  $_SESSION['nom'] ; ?>"><br>
Password : <input type="text" name="password" value=" <?php echo $_SESSION['password'] ; ?>"><br>
Confirmation password : <input type="text" name="confirmpassword" value="<?php echo $_SESSION['confirmpassword'] ; ?>"><br>
<input type="submit" name="submit" value="S'inscrire"><br>
</form>




</html>