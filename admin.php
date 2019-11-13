<html>

<!-- - Une page d’administration (admin.php) :
Cette page est accessible UNIQUEMENT pour l’utilisateur “admin”. Elle
permet de lister l’ensemble des informations des utilisateurs présents dans
la base de données. -->

<h1> Page Administrateur </h1>


<?php
//Requete sur TOUTES les infos
$connexion = mysqli_connect("localhost","root","","moduleconnexion");
$requete = "SELECT `Id`, `login`,`prenom`,`nom`,`password` FROM `utilisateurs` ORDER BY `utilisateurs`.`Id` ASC";
$query = mysqli_query($connexion,$requete);
$resultat= mysqli_fetch_all($query);


?>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Login</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
            <?php 
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

            ?>

    </tbody>
</table>

</html>