<html>
<h1> Page Administrateur </h1>

            <!-- PHP -->
<?php
session_start();

//Requete sur TOUTES les infos des utilisateurs
$connexion = mysqli_connect("localhost","root","","moduleconnexion");
$requete = "SELECT * FROM `utilisateurs` ORDER BY `utilisateurs`.`Id` ASC";
$query = mysqli_query($connexion,$requete);
$resultat= mysqli_fetch_all($query);

?>


            <!-- HTML -->

<!-- TABLEAU AVEC AFFICHAGE REQUETTE MySQL TOUTES LES INFORMATIONS SUR TOUT LES UTILISATEURS DANS LA BDD MySQL -->
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