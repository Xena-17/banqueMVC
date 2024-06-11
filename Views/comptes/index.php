
<button onclick="redirectToCreateCompte()">Ajouter un compte</button>
<table>
    <thead>
        <th>ID</th>
        <th>NumeroCompte</th>
        <th>Solde</th>
        <th>FK_Client</th>
        <th>Actions</th>
    </thead>
    <tbody>
        <?php 
        foreach ($comptes as $compte) {
            echo "<tr>";
               echo "<td>". $compte ["ID"] . "</td>";
               echo "<td>". $compte ["NumeroCompte"] . "</td>";
               echo "<td>". $compte ["Solde"] . "</td>";
               echo "<td>". $compte ["FK_Client"] . "</td>";
               echo "<td> <button onclick='redirectToDetailsCompte(".$compte["ID"] .")'>Voir détails</button></td>";        
               echo "</tr>";
        }
         ?>
    </tbody>
    </table>
<script type="text/javascript">
function redirectToCreateCompte() {
    window.location.replace("../Controllers/CompteController.php?action=create");
} 
function redirectToDetailsCompte(id) {
    window.location.replace("../Controllers/CompteController.php?action=details&id="+ id);
}

</script>