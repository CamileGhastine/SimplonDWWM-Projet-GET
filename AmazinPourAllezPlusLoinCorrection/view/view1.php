    <!-- Etape 1 : A afficher uniquement une fois que le boutton "Commencer" a été pressé -->
    <h2>Question 1</h2>
    <p>L'agent a-t-il été agréable ?</p>

    <a href="?step=<?= $_GET['step'] + 1 ?>&result=<?= $_GET['result'] + 2 ?>" role="button" class="btn btn-success">oui</a> <!-- rapporte 2 point -->
    <a href="?step=<?= $_GET['step'] + 1 ?>&result=<?= $_GET['result'] + 0 ?>" role="button" class="btn btn-danger">non</a> <!-- rapporte 0 point -->
    <a href="?step=<?= $_GET['step'] + 1 ?>&result=<?= $_GET['result'] + 1 ?>" role="button" class="btn btn-secondary">sans avis</a> <!-- rapporte 1 point -->