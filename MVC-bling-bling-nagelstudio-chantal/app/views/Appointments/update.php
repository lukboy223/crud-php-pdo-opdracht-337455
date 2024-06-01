<?php require APPROOT . '/views/includes/header.php';

if ($data['Soort1'] == 'on') {
    $Soort1 = 'checked';
} else {
    $Soort1 = '';
}

if ($data['Soort2'] == 'on') {
    $Soort2 = 'checked';
} else {
    $Soort2 = '';
}
if ($data['Soort3'] == 'on') {
    $Soort3 = 'checked';
} else {
    $Soort3 = '';
}

?>



<div class="container">
    <div class="col-3"></div>
    <div class="col-6">
        <form action=" <?= URLROOT; ?>/Appointments/update/<?= $data['Id']; ?>" method="post">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="mb-3 row d-flex justify-content-between">
                        <label for="Kleur" class="form-label">Kies 4 basiskleuren voor de nagels:</label>
                        <input type="color" name="Kleur1" class="col-2" id="Kleur1" value="<?= $data['Kleur1']; ?>">
                        <input type="color" name="Kleur2" class="col-2" id="Kleur2" value="<?= $data['Kleur2']; ?>">
                        <input type="color" name="Kleur3" class="col-2" id="Kleur3" value="<?= $data['Kleur3']; ?>">
                        <input type="color" name="Kleur4" class="col-2" id="Kleur4" value="<?= $data['Kleur4']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="Tel" class="form-label">Uw telefoonnummer:</label>
                        <input type="tel" name="Tel" class="form-control" id="Tel" placeholder="123456789" value="<?= $data['Tel']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="Email" class="form-label">Uw e-mailadres:</label>
                        <input type="email" name="Email" class="form-control" id="Email" placeholder="something@mail.com" value="<?= $data['Email']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="Datum" class="form-label">Afspraak datum:</label>
                        <input type="datetime-local" name="Datum" class="form-control" id="Datum" value="<?= $data['Datum']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="">Soort behandeling</label><br>
                        <input type="checkbox" name="Soort1" id="Soort1" <?= $Soort1 ?>> Nagelbijt arrengement (termijnbetaling mogelijk) €180<br>
                        <input type="checkbox" name="Soort2" id="Soort2" <?= $Soort2 ?>> Luze manicure (massage en handpakking) €30,00 <br>
                        <input type="checkbox" name="Soort3" id="Soort3" <?= $Soort3 ?>> Nagelreperatie per nagel (in de eeste week gratis) €5,00
                    </div>
                    <button type="submit" class="btn btn-primary">Sla op</button>
                    <button type="reset" class="btn btn-primary">Reset</button><br>
                    <br>

                    <a href="<?= URLROOT; ?>/Appointments/index">Terug  </a>
                </div>
                <div class="col-3"></div>
            </div>
        </form>
    </div>
    <div class="col-3"></div>
</div>




<?php require APPROOT . '/views/includes/footer.php'; ?>