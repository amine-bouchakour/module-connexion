<?php
session_start();

//Requete sur TOUTES les infos
$connexion = mysqli_connect("localhost","root","","moduleconnexion");
$requete = "SELECT * FROM utilisateurs WHERE login='".$_SESSION['login']."' ";
$query = mysqli_query($connexion,$requete);
$resultat= mysqli_fetch_assoc($query);

?>



                        <!-- HTML -->
<html>

<h1> Page Profil </h1>

<!-- FORMULAIRE CHANGEMENT DONNEES PROFIL -->
<form action="profil.php" name="modification" method="post">
<label for="login">Login : </label> <input type="text" name="login" value="<?php echo $resultat['login'] ; ?>"  required><br>
<label for="prenom">Prénom : </label> <input type="text" name="prenom" value="<?php echo $resultat['prenom'] ; ?>"  required><br>
<label for="nom">Nom : </label> <input type="text" name="nom" value="<?php echo $resultat['nom'] ; ?>" required><br>
<label for="password">Password : </label> <input type="text" name="password" value=" <?php echo $resultat['password'] ; ?>"  required><br>
<label for="confirmpassword">Confirmation password :</label>  <input type="text" name="confirmpassword" value="<?php echo $resultat['password']; ?>" required><br>
<input type="submit" name="submit" value="modifier"><br>
</form>



                        <!-- PHP -->
<?php

//CONDITION SI MODIFICATION ENVOI REQUETE UPDATE DONNEES SUR BDD MySQL
if(isset($_POST['submit']))
    
    {
        $requeteupdate = "UPDATE utilisateurs 
        SET login='".$_POST['login']."', prenom='".$_POST['prenom']."' , nom='".$_POST['nom']."' , password='".$_POST['password']."' 
        WHERE login = '".$_SESSION['login']."'";

        if($resultat['login'] != $_POST['login'])
            {
                mysqli_query($connexion,$requeteupdate);
                $_SESSION['login'] = $_POST['login'];
                header('Location: profil.php');
            }

        elseif($resultat['prenom'] != $_POST['prenom'])
            {
                mysqli_query($connexion,$requeteupdate);
                header('Location: profil.php');
            }

        elseif($resultat['nom'] != $_POST['nom'])
            {
                mysqli_query($connexion,$requeteupdate);
                header('Location: profil.php');
            }

        elseif($resultat['password'] != $_POST['password'])
            {
                mysqli_query($connexion,$requeteupdate);
                header('Location: profil.php');
            }

        else
            {
                echo " Impossible de changer d'informations ";
            }
    }
?>

</html>