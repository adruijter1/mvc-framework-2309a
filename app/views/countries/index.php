<?php require_once APPROOT . '/views/includes/header.php'; ?>

<h3><?= $data['title']; ?></h3>

<table class="table table-hover">
    <thead>
        <th>Naam</th>
        <th>Hoofdstad</th>
        <th>Continent</th>
        <th>Aantal Inwoners</th>
    </thead>
    <tbody>
        <?= $data['dataRows']; ?>
    </tbody>
</table>

<br>
<a href="<?= URLROOT; ?>/homepages/index">Homepage</a>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>