<?php $_GET['tel'] = isset($_GET['tel']) ? $_GET['tel'] : ''; ?>

<!-- Etape 5 : A afficher uniquement si "non" a été répondu à l'étape 3 -->
<p>Votre problème n'a pas été résolu.</p>
<p>Pour être rappelé, entrez votre numéro de téléphone dans le clavier virtuel et validez :</p>
<!-- Coder ici un clavier numérique permettant de saisir le numéro de téléphone avec un bouton "ne pas être rappelé" -->
<!-- Afficher ici le numéro de téléphone qui s'affiche au fur et à mesure de la saisie-->

<p>
    <?php
    if (strlen($_GET['tel']) < 10) {
        for ($i = 0; $i <= 9; $i++) {
    ?>
            <a href="?step=<?= $_GET['step'] ?>&result=<?= $_GET['result'] ?>&tel=<?= $_GET['tel'] . $i ?>" role="button" class="btn btn-secondary"><?= $i ?></a>
    <?php
        }
    }
    ?>
</p>
<p>
    Votre numéro : <?= $_GET['tel'] ?>
    <a href="?step=<?= $_GET['step'] ?>&result=<?= $_GET['result'] ?>&tel=<?= substr($_GET['tel'], 0, -1) ?>" role="button" class="btn btn-primary btn-sm">Corriger</a>
    <a href="?step=<?= $_GET['step'] ?>&result=<?= $_GET['result'] ?>" role="button" class="btn btn-danger btn-sm">Reinitialiser</a>
</p>

<?PHP
if (strlen($_GET['tel']) === 10) {
?>
    <a href="?step=final&result=<?= $_GET['result'] ?>&tel=<?= $_GET['tel'] ?>" role="button" class="btn btn-success">Valider</a> <!-- Validation du numéro de téléphone -->
<?php } ?>
<a href="?step=final&result=<?= $_GET['result'] ?>" role="button" class="btn btn-danger btn">Ne pas être rappelé</a>