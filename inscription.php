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

<label for="login">Login :</label> <input type="text" name="login" value="" required><br>
<label for="prenom">Prénom :</label> <input type="text" name="prenom" value="" required><br>
<label for="nom">Nom :</label> <input type="text" name="nom" value="" required><br>
<label for="password">Password :</label> <input type="text" name="password" value="" required><br>
<label for="confirmpassword">Confirmation password :</label> <input type="text" name="confirmpassword" value="" required><br>
<input type="submit" name="submit" value="S'inscrire"><br>
</form>






<?php

$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$login= $_POST['login'];           
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];

$connexion = mysqli_connect("localhost","root","","moduleconnexion");



$connexion = mysqli_connect("localhost","root","","moduleconnexion");
$requete1 = "SELECT * FROM utilisateurs WHERE login='".$_POST['login']."' ";
$query1 = mysqli_query($connexion,$requete1);
$resultat1= mysqli_num_rows($query1);




// CONDITION TOUT LES CHAMPS REMPLI/ AVEC PASSWORD!=CONFIRMPASSWORD/ OU AUCUNE VALEURS ENTREE

if(isset(($_POST)['submit'])==true)

{
    if($_POST['prenom']=='admin' and $_POST['nom']=='admin' and $_POST['login']=='admin' and $_POST['password']=='admin' and $_POST['confirmpassword']=='admin')
    {
        echo 'Bienvenue Administrateur !'.'<br/>';
        header('Location:admin.php');
    }

    if(isset($_POST['prenom']) and isset($_POST['nom']) and isset($_POST['login']) and isset($_POST['password']) and isset($_POST['confirmpassword']) and ($_POST['password'] == $_POST['confirmpassword']))
    {
            if($resultat1==0)
            {
                echo 'Bienvenue '.'<br/>';
                $requete = "INSERT INTO `utilisateurs` (`login`, `prenom`, `nom`, `password`) VALUES ('$login', '$prenom', '$nom', '$password')";
                $query = mysqli_query($connexion,$requete);

            }

            else 
            {
                echo 'Login déjà éxistant'.'<br/>';
            }

       
    }

    if($_POST['prenom'] and $_POST['nom'] and  $_POST['login'] and $_POST['password'] and $_POST['confirmpassword'] and ($_POST['password'] != $_POST['confirmpassword']))
    {
        echo 'Mot de passe et confirmation mot de passe différents'.'<br/>';
    }

    
}

// if(isset($_POST['submit']))

// {
//     if ($_POST['prenom'] and $_POST['nom'] and $_POST['login'] and $_POST['password'] and $_POST['confirmpassword'] and ($_POST['password'] == $_POST['confirmpassword']))

//     {
//         echo 'Félicitation ! le formulaire a bien été rempli !'.'</br>';

//     }
    
//     foreach($resultat1 as $key =>$value)
//     {
//         if($resultat1[$key][1] != $_POST['login'] )
//         {
            
//             

            

//             header ('location:connexion.php');
//         }

//         else if ($resultat1[$key][1] == $_POST['login'] )
//         {
//             echo 'login déjà existant'.'<br/>';
//         }

//     }

// }

// if($_POST['prenom']=='admin' and $_POST['nom']=='admin' and $_POST['login']=='admin' and $_POST['password']=='admin' and $_POST['confirmpassword']=='admin')
// {
//     echo 'bienvenue administrateur !'.'<br/>';
// }


// else if($_POST['prenom'] and $_POST['nom'] and  $_POST['login'] and $_POST['password'] and $_POST['confirmpassword'] and ($_POST['password'] != $_POST['confirmpassword'])) {
//   echo 'Le password et la confirmation du password sont différents'.'</br>';    
// }
// else
// {
//     echo 'Veuillez svp remplir le formulaire entièrement'.'</br>';
// }


// if (isset($_POST['prenom']) and isset($_POST['nom']) and isset($_POST['login']) and isset($_POST['password']) and isset($_POST['confirmpassword']) )
// {
// echo 'Veuillez renseigner tous les champs'.'<br/>';
// }





?>

</html>