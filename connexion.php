<?php






?>

<html>

<h1> Page Connexion </h1>

<!-- - Une page contenant un formulaire de connexion (connexion.php) :
Le formulaire doit avoir deux inputs : “login” et “password”. Lorsque le
formulaire est validé, s’il existe un utilisateur en bdd correspondant à ces
informations, alors l’utilisateur est considéré comme connecté et une (ou
plusieurs) variables de session sont créées. -->




<form action="connexion.php" name="connexion" method="post">
Login : <input type="text" name="login" value="" > <br>
Password : <input type="text" name='password' value=""> <br>
<input type="submit" name="connexion">
</form>




<?php


$connexion = mysqli_connect("localhost","root","","moduleconnexion");
$requete = "SELECT * FROM utilisateurs";
$query = mysqli_query($connexion,$requete);
$resultat= mysqli_fetch_all($query);

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


// if($_POST['login']==$_SESSION['login'] and $_POST['password']==$_SESSION['password'])
// {
//     echo 'Bienvenue à toi '.$_SESSION['login'].' '.$_SESSION['prenom'].'<br/>';
//     header ('location:index.php');
//     session_start();

//     $prenom=$_POST['prenom'];
//     $nom=$_POST['nom'];
//     $login= $_POST['login'];
//     $password=$_POST['password'];
//     $confirmpassword=$_POST['confirmpassword'];
// }

// else if($_POST['login']!=$_SESSION['login'] and $_POST['password']!=$_SESSION['password'] )

// {
//     echo 'Mauvais login ou mot de passe'.'<br/>';
// }






?>

</html>