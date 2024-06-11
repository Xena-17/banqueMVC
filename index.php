<button onclick="redirectToClients()">Clients</button>
<button onclick="redirectToComptes()">Comptes</button>
<button onclick="redirectToTransactions()">Transactions</button>
<!-- Ajouter un bouton pour faire un virement -->

<script type="text/javascript">
    function redirectToClients(){
        window.location.replace ('./Controllers/ClientController.php');
    }
    function redirectToComptes(){
        window.location.replace ('./Controllers/CompteController.php');
    }
    function redirectToTransactions(){
        window.location.replace ('./Controllers/TransactionController.php');
    }

     // Ajouter une fonction de redirection pour le virement
     
</script>

