<form action="../Controllers/CompteController.php?action=insert" method="post">
    <label for="ID">ID</label>
    <input type="number" name="ID" id="ID" placeholder="Renseigner l'ID du compte" required>
    <label for="NumeroCompte">Numéro du Compte</label>
    <input type="number" name="NumeroCompte" id="NumeroCompte"placeholder="Renseigner le Numéro du compte" required>
    <label for="Solde">Solde</label>
    <input type="number"name="Solde" id="Solde" placeholder="Renseigner le solde du compte" required>
    <label for="FK_Clients">FK_Clients</label>
    <input type="number" name="FK_Clients" id="FK_Clients" placeholder="Renseigner le FK du compte " required>
    <input type="submit" value="Envoyer">
</form>