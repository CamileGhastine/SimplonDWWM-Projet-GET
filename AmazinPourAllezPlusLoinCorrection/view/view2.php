    <!-- Etape 2 : A afficher uniquement une fois que l'étape 1 a été résolue -->
    <h2>Question 2</h2>
    <p>L'agent a-t-il compris votre problème ?</p>
    <a href="?step=<?= $_GET['step'] + 1 ?>&result=<?= $_GET['result'] + 2 ?>" role="button" class="btn btn-success">oui</a> <!-- rapporte 2 point -->
    <a href="?step=<?= $_GET['step'] + 1 ?>&result=<?= $_GET['result'] + 0 ?>" role="button" class="btn btn-danger">non</a> <!-- rapporte 1 point -->
    <a href="?step=<?= $_GET['step'] + 1 ?>&result=<?= $_GET['result'] + 1 ?>" role="button" class="btn btn-secondary">sans avis</a> <!-- rapporte 0 point -->