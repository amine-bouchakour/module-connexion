<?php session_start() ?>
<html>

<head>
    <meta charset="utf-8">
    <title>Page d'inscription</title>
    <link rel="stylesheet" href="moduleconnexion1.css">
    
</head>

<h1> Page Inscription </h1>

<div class="formulaire1">
<!-- FORMULAIRE INSCRIPTION DE TYPE POST  -->
<form class="flexrow" action="inscription.php" name="inscription" method="post">
<input class="bor" type="text" name="login" placeholder="Login" value="" required><br>
<input class="bor" type="text" name="prenom" placeholder="Prénom"value="" required><br>
<input class="bor" type="text" name="nom" placeholder="Nom"value="" required><br>
<input class="bor" type="text" name="password" placeholder="Password" value="" required><br>
<input class="bor" type="text" name="confirmpassword" placeholder="Confirmation password"value="" required><br>
<div class='boutonenvoyer1'><input class="bor1" type="submit" name="submit" value="Valider l'inscription"></div><br>
</form>
<p class="align"><?php verificationinscription() ?></p>
</div>


                            <!-- PHP -->
<?php


// REQUETE INSERT TO UTILISATEURS INFORMATIONS PROFIL
$connexion = mysqli_connect("localhost","root","","moduleconnexion");

// ASIGNATION VARIABLE DU FORMULAIRE VIA POST


function verificationinscription()

{
  
   
    
    // CONDITION VERIFICATION INPUT ENVOYER FORMULAIRE
    if(isset(($_POST)['submit'])==true)
    
    
        {   
            
            // REQUETE COMPARAISON SI LOGIN DEJA EXISTANT OU NON POUR CREER PROFIL UNIQUE
            $connexion = mysqli_connect("localhost","root","","moduleconnexion");
            $requete1 = "SELECT * FROM utilisateurs WHERE login='".$_POST['login']."' ";
            $query1 = mysqli_query($connexion,$requete1);
            $resultat1= mysqli_num_rows($query1);

            // CONDITION VERIFICATION POUR ADMIN
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
                            
                            $requete = "INSERT INTO `utilisateurs` (`login`, `prenom`, `nom`, `password`) VALUES ('".$_POST['login']."', '".$_POST['prenom']."','".$_POST['nom']."', '".$_POST['password']."')";
                            $query = mysqli_query($connexion,$requete);
                            header('Location:connexion.php');
    
                            
    
    
                        }
    
                    else 
                        {
                            echo 'Login déjà éxistant'.'<br/>';
                        }
                }
            // CONDITION VERIFICATION SI MOT DE PASSE ET CONFIRMATION IDENTIQUES
            if($_POST['prenom'] and $_POST['nom'] and  $_POST['login'] and $_POST['password'] and $_POST['confirmpassword'] and ($_POST['password'] != $_POST['confirmpassword']))
                {
                    echo 'Mot de passe et confirmation de mot de passe différent'.'<br/>';
                }

                
        }

        

}

?>

<header>

</header>


<body class="body2">
    

<main>



</main>


</body>

<footer>


</footer>

</html>