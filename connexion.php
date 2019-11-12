<html>


<!-- - Une page contenant un formulaire de connexion (connexion.php) :
Le formulaire doit avoir deux inputs : “login” et “password”. Lorsque le
formulaire est validé, s’il existe un utilisateur en bdd correspondant à ces
informations, alors l’utilisateur est considéré comme connecté et une (ou
plusieurs) variables de session sont créées. -->


<?php

echo $_POST['nom'];




?>


<form action="connexion.php" name="connexion" method="post">
Login : <input type="text" name="login" value=""> <br>
Password : <input type="text" name='password' value=""> <br>
<input type="submit" name="valider">
</form>


</html>