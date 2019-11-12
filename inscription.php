<html>




<?php



if(isset($_POST['formulaire']))
{
    if($_POST['password']==$_POST['confirmpassword'] )
    {
        echo 'Bien joué gros !'.'</br>';
    }

    if($_POST['password']!=$_POST['confirmpassword'] )
    {
        echo 'Mot de passe et confirmation de mot de passe invalide'.'</br>';
    }

    if(!isset($_POST['password']))
    {
        echo 'Veuillez remplir le mot de passe'.'</br>';
    }
    if(!isset($_POST['confirmpassword']))
    {
        echo 'Veuillez remplir la confirmation de mot de passe'.'</br>';
    }
    if(!isset($_POST['password']) and !isset($_POST['confirmpassword']))
    {
        echo 'Veuillez saisir les mots de passe et confirmation'.'</br>';
    }

    else
    {
        echo 'Veuillez remplir le formulaire'.'</br>';
    }

    if(($_POST['login'])=='admin' and ($_POST['prenom'])=='admin' and ($_POST['nom'])=='admin' and ($_POST['password'])=='admin' and ($_POST['confirmpassword'])=='admin')
    {
       echo $resultat= mysqli_fetch_all($query);
    }
}


//Requete sur TOUTES les infos
$connexion = mysqli_connect("localhost","root","","moduleconnexion");
$requete = "SELECT * FROM `moduleconnexion`";
$query = mysqli_query($connexion,$requete);
$resultat= mysqli_fetch_all($query);

$resultat.'</br>'; 

?>


<form action="inscription.php" name="formulaire" method="post">

Login : <input type="text" name="login" value=""><br>
Prenom : <input type="text" name="prenom" value=""><br>
Nom : <input type="text" name="nom" value=""><br>
Password : <input type="text" name="password" value=""><br>
Confirmation password : <input type="text" name="confirmpassword" value=""><br>
<input type="submit" name="submit" value="S'inscrire"><br>
</form>

</html>