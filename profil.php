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

<head>
    <meta charset="utf-8">
    <title>Page modification profil</title>
    <link rel="stylesheet" href="moduleconnexion1.css">
    
</head>

<h1> Page Profil </h1>
<div class="formulaire2">
<!-- FORMULAIRE CHANGEMENT DONNEES PROFIL -->
<form class="flexrow " action="profil.php" name="modification" method="post">
<label class="align2" for="login">LOGIN</label> <input class="bor" type="text" name="login" value="<?php echo $resultat['login'] ; ?>"  required><br>
<label class="align2" for="prenom">PRENOM </label> <input class="bor" type="text" name="prenom" value="<?php echo $resultat['prenom'] ; ?>"  required><br>
<label class="align2" for="nom">NOM</label> <input class="bor" type="text" name="nom" value="<?php echo $resultat['nom'] ; ?>" required><br>
<label class="align2" for="password">PASSWORD</label> <input class="bor" type="text" name="password" value="<?php echo $resultat['password'] ; ?>"  required><br>
<label class="align2" for="confirmpassword">CONFIRMATION PASSWORD</label>  <input class="bor" type="text" name="confirmpassword" value="<?php echo $resultat['password']; ?>" required><br>
<div class='boutonenvoyer1'><input class="bor1" type="submit" name="submit" value="Modifier profil"></div>
</form>
<p class="align"><?php verificationprofil() ?></p>
</div>



                        <!-- PHP -->
<?php


function verificationprofil()

{

    //CONDITION SI MODIFICATION ENVOI REQUETE UPDATE DONNEES SUR BDD MySQL
    if(isset($_POST['submit']))
        
        {

            $connexion = mysqli_connect("localhost","root","","moduleconnexion");
    $requeteupdate = "UPDATE utilisateurs 
            SET login='".$_POST['login']."', prenom='".$_POST['prenom']."' , nom='".$_POST['nom']."' , password='".$_POST['password']."' 
            WHERE login = '".$_SESSION['login']."'";
    $query1 = mysqli_query($connexion,$requeteupdate);
    $resultat1= mysqli_fetch_all($query1);
            
    
            if($resultat1['login'] != $_POST['login'])
                {
                    $query1 = mysqli_query($connexion,$requeteupdate);
                    $_SESSION['login'] = $_POST['login'];
                    header('Location:index.php');
                }
    
            elseif($resultat1['prenom'] != $_POST['prenom'])
                {
                    $query1 = mysqli_query($connexion,$requeteupdate);
                    $_SESSION['prenom'] = $_POST['prenom'];
                    header('Location:index.php');
                }
    
            elseif($resultat1['nom'] != $_POST['nom'])
                {
                    $query1 = mysqli_query($connexion,$requeteupdate);
                    $_SESSION['nom'] = $_POST['nom'];
                    header('Location:index.php');
                }
    
            elseif($resultat1['password'] != $_POST['password'] )
                {
                    $query1 = mysqli_query($connexion,$requeteupdate);
                    $_SESSION['password'] = $_POST['password'];
                    header('Location:index.php');
                }

            else
                {
                    echo " Impossible de modifier les informations ";
                }
        }
}


?>

<body class="body3">
    

</body>

</html>