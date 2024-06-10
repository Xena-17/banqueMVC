<h2>Nom : <?php echo $client['Nom'] ?></h2>
<h2>Prénom : <?php echo $client['Prenom'] ?></h2>
<h2>Mail : <?php echo $client['Mail'] ?></h2>
<h2>Numéro de téléphone : <?php echo $client['Telephone'] ?></h2>

<h1>Comptes</h1>
<table>
    <thead>
        <th>ID</th>
        <th>Numéro de Compte</th>
        <th>Solde</th>
    </thead>
    <tbody>
        <?php 
        foreach ($comptes as $compte) {
            echo "<tr>";
               echo "<td>". $compte ["ID"] . "</td>";
               echo "<td>". $compte ["NumeroCompte"] . "</td>";
               echo "<td>". $compte ["Solde"] . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>