    <!-- Etape 4 : A afficher uniquement une fois que l'étape 2 a été résolue -->
    <h2>Question 4</h2>
    <p>L'agent a-t-il résolu votre problème ?</p>
    <a href="?step=final&result=<?= $_GET['result'] + 1 ?>" role="button" class="btn btn-success">oui</a> <!-- rapporte 1 point -->
    <a href="?step=<?= $_GET['step'] + 1 ?>&result=<?= $_GET['result'] - 1 ?>" role="button" class="btn btn-danger">non</a> <!-- rapporte -1 point -->