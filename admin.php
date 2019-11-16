<html>

<head>
    <meta charset="utf-8">
    <title>Page Administrateur</title>
    <link rel="stylesheet" href="moduleconnexion1.css" type="text/css">
</head>


            <!-- PHP -->
<?php
session_start();

function affichagetoutesdonnees()
{
    //Requete sur TOUTES les infos des utilisateurs
$connexion = mysqli_connect("localhost","root","","moduleconnexion");
$requete = "SELECT * FROM `utilisateurs` ORDER BY `utilisateurs`.`Id` ASC";
$query = mysqli_query($connexion,$requete);
$resultat= mysqli_fetch_all($query);

    $i=0;
    while($i<count($resultat))
        {
            $j=0;
            echo "<tr>";

            while ($j<count($resultat[$i]))
                {
                    echo "<td>".$resultat[$i][$j]."</td>";
                    $j++;
                }
                
            echo "</tr>";
            $i++;
        } 
}

?>


            <!-- HTML -->

<body class="body4">
    

    <p class="titre3">Page Administrateur </p>

    <!-- TABLEAU AVEC AFFICHAGE REQUETTE MySQL TOUTES LES INFORMATIONS SUR TOUT LES UTILISATEURS DANS LA BDD MySQL -->
    <table>
        <thead>
            <tr class="tr">
                <th>Id</th>
                <th>Login</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                affichagetoutesdonnees()
            ?>

        </tbody>
    </table>

</body>

</html>