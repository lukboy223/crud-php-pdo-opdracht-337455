<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container text-center">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3><?= $data['title']; ?></h3>

        </div>
        <div class="col-3"></div>
    </div>
<div class="row">
<div class="col-1"></div>
<div class="col-10">
    <table class="table table-hover">
        <thead>
            <th>Kleur1</th>
            <th>Kleur2</th>
            <th>Kleur3</th>
            <th>Kleur4</th>
            <th>Tel</th>
            <th>Email</th>
            <th>Datum</th>
            <th>Soort</th>
        </thead>
        <tbody>
            <?= $data['dataRows'] ?>
        </tbody>
    </table>

</div>
<div class="col-1"></div>
</div>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <a href="<?= URLROOT; ?>/Appointments/create">new appointment</a></p>
        <br>
        <a href="<?= URLROOT; ?>/Homepages/index">Homepage</a>

    </div>
    <div class="col-3"></div>
</div>
    
    
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>