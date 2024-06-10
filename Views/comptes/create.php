<h1>Formulaire Comptes</h1>
<form action="../Controllers/CompteController.php?action=insert" method="post">
    <label for="NumeroCompte">Numéro du Compte</label>
    <input type="number" name="NumeroCompte" id="NumeroCompte"placeholder="Renseigner le Numéro du compte" required>
    <label for="Solde">Solde</label>
    <input type="number"name="Solde" id="Solde" placeholder="Renseigner le solde du compte" required>
    <label for="FK_Client">FK_Client</label>
    <input type="number" name="FK_Client" id="FK_Client" placeholder="Renseigner le FK du compte " required>
    <input type="submit" value="Envoyer">
</form>