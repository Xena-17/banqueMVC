

//faire l'affichage sous forme de tableau par exemple ou de liste puce. Utilisation d'un foreach
<table>
    <thead>
        <th>ID</th>
        <th>NumeroCompte</th>
        <th>Solde</th>
        <th>FK_Client</th>
    </thead>
    <tbody>
        <?php 
        foreach ($comptes as $compte) {
            echo "<tr>";
               echo "<td>". $compte ["ID"] . "</td>";
               echo "<td>". $compte ["NumeroCompte"] . "</td>";
               echo "<td>". $compte ["Solde"] . "</td>";
               echo "<td>". $compte ["FK_Client"] . "</td>";
            echo "</tr>";
        }
         ?>
    </tbody>
</table>