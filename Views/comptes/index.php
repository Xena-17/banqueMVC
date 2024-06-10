
<button onclick="redirectToCreateCompte()">Ajouter un compte</button>
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
<script type="text/javascript">
function redirectToCreateCompte() {
    window.location.replace("../Controllers/CompteController.php?action=create");
}
</script>