    <!-- Etape 3 : question suplémentaire -->
    <h2>Question 3</h2>
    <p>L'agent vous a-t-il paru compétent ?</p>
    <a href="?step=<?= $_GET['step'] + 1 ?>&result=<?= $_GET['result'] + 2 ?>" role="button" class="btn btn-success">oui</a> <!-- rapporte 2 point -->
    <a href="?step=<?= $_GET['step'] + 1 ?>&result=<?= $_GET['result'] + 0 ?>" role="button" class="btn btn-danger">non</a> <!-- rapporte 1 point -->