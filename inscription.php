<html>

<h1> Page Inscription </h1>

<!-- FORMULAIRE INSCRIPTION DE TYPE POST  -->
<form action="inscription.php" name="inscription" method="post">
<label for="login">Login :</label> <input type="text" name="login" value="" required><br>
<label for="prenom">Prénom :</label> <input type="text" name="prenom" value="" required><br>
<label for="nom">Nom :</label> <input type="text" name="nom" value="" required><br>
<label for="password">Password :</label> <input type="text" name="password" value="" required><br>
<label for="confirmpassword">Confirmation password :</label> <input type="text" name="confirmpassword" value="" required><br>
<input type="submit" name="submit" value="S'inscrire"><br>
</form>



                            <!-- PHP -->
<?php
// ASIGNATION VARIABLE DU FORMULAIRE VIA POST
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$login= $_POST['login'];           
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];

// REQUETE INSERT TO UTILISATEURS INFORMATIONS PROFIL
$connexion = mysqli_connect("localhost","root","","moduleconnexion");


// REQUETE COMPARAISON SI LOGIN DEJA EXISTANT OU NON POUR CREER PROFIL UNIQUE
$connexion = mysqli_connect("localhost","root","","moduleconnexion");
$requete1 = "SELECT * FROM utilisateurs WHERE login='".$_POST['login']."' ";
$query1 = mysqli_query($connexion,$requete1);
$resultat1= mysqli_num_rows($query1);




// CONDITION VERIFICATION INPUT ENVOYER FORMULAIRE
if(isset(($_POST)['submit'])==true)

    {   // CONDITION VERIFICATION POUR ADMIN
        if($_POST['prenom']=='admin' and $_POST['nom']=='admin' and $_POST['login']=='admin' and $_POST['password']=='admin' and $_POST['confirmpassword']=='admin')
            {
                echo 'Bienvenue Administrateur !'.'<br/>';
                header('Location:admin.php');
            }

        // CONDITION VERIFICATION SI LOGIN UNIQUE SI CHAMP REMPLI  + OUVERTURE DE PAGE CONNEXION.PHP SI TOUT VALIDE
        if(isset($_POST['prenom']) and isset($_POST['nom']) and isset($_POST['login']) and isset($_POST['password']) and isset($_POST['confirmpassword']) and ($_POST['password'] == $_POST['confirmpassword']))
            {
                if($resultat1==0)
                    {
                        
                        $requete = "INSERT INTO `utilisateurs` (`login`, `prenom`, `nom`, `password`) VALUES ('$login', '$prenom', '$nom', '$password')";
                        $query = mysqli_query($connexion,$requete);
                        header('Location:connexion.php');
                    }

                else 
                    {
                        echo 'Login déjà éxistant'.'<br/>';
                    }
            }
        // CONDITION V2RIFICATION SI MOT DE PASSE ET CONFIRMATION IDENTIQUES
        if($_POST['prenom'] and $_POST['nom'] and  $_POST['login'] and $_POST['password'] and $_POST['confirmpassword'] and ($_POST['password'] != $_POST['confirmpassword']))
            {
                echo 'Mot de passe et confirmation mot de passe différents'.'<br/>';
            }
    }
?>

</html>