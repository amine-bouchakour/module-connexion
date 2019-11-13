

<?php
session_start();





?>

<html>

<h1> Page Connexion </h1>

<!-- - Une page contenant un formulaire de connexion (connexion.php) :
Le formulaire doit avoir deux inputs : “login” et “password”. Lorsque le
formulaire est validé, s’il existe un utilisateur en bdd correspondant à ces
informations, alors l’utilisateur est considéré comme connecté et une (ou
plusieurs) variables de session sont créées. -->




<form action="connexion.php" name="connexion" method="post">
<input type="text" name="login" placeholder="<?php echo $_SESSION['login'];  ?>" value=""> <br>
<input type="text" name='password' placeholder="<?php echo $_SESSION['password'];  ?>" value=""> <br>
<input type="submit" name="valider">
</form>




<?php


if($_POST['login']==$_SESSION['login'] and $_POST['password']==$_SESSION['password'])
{
    echo 'Bienvenue à toi '.$_SESSION['login'].' '.$_SESSION['prenom'].'<br/>';
}

else if($_POST['login']!=$_SESSION['login'] and $_POST['password']!=$_SESSION['password'] )

{
    echo 'Mauvais login ou mot de passe'.'<br/>';
}

else
{
    echo 'Identification incorrecte'.'<br/>';
}




?>

</html>