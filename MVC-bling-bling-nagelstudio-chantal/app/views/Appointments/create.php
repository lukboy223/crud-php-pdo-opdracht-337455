<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6">
            <h3><?= $data['title']; ?></h3><br>
        </div>
        <div class="col-3">

        </div>
    </div>
    <form action="<?= URLROOT; ?>/Appointments/create" method="post">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="mb-3 row d-flex justify-content-between">
                    <label for="Kleur" class="form-label">Kies 4 basiskleuren voor de nagels:</label>
                    <input type="color" name="Kleur1" class="col-2" id="Kleur1">
                    <input type="color" name="Kleur2" class="col-2" id="Kleur2">
                    <input type="color" name="Kleur3" class="col-2" id="Kleur3">
                    <input type="color" name="Kleur4" class="col-2" id="Kleur4">
                </div>
                <div class="mb-3">
                    <label for="Tel" class="form-label">Uw telefoonnummer:</label>
                    <input type="tel" name="Tel" class="form-control" id="Tel" placeholder="123456789">
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label">Uw e-mailadres:</label>
                    <input type="email" name="Email" class="form-control" id="Email" placeholder="something@mail.com">
                </div>
                <div class="mb-3">
                    <label for="Datum" class="form-label">Afspraak datum:</label>
                    <input type="datetime-local" name="Datum" class="form-control" id="Datum">
                </div>
                <div class="mb-3">
                    <label for="">Soort behandeling</label><br>
                    <input type="checkbox" name="Soort1" id="Soort1"> Nagelbijt arrengement (termijnbetaling mogelijk) €180<br>
                    <input type="checkbox" name="Soort2" id="Soort2"> Luze manicure (massage en handpakking) €30,00 <br>
                    <input type="checkbox" name="Soort3" id="Soort3"> Nagelreperatie per nagel (in de eeste week gratis) €5,00
                </div>
                <button type="submit" class="btn btn-primary">Sla op</button>
                <button type="reset" class="btn btn-primary">Reset</button>


            </div>
            <div class="col-3"></div>
        </div>
    </form>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-3">
            <a href="<?= URLROOT; ?>/Homepages/index">Homepage</a><br>
            <a href="<?= URLROOT; ?>/Appointments/index">Afspraken inzien</a>
        </div>
        <div class="col-3"></div>
    </div>
</div>





<?php require APPROOT . '/views/includes/footer.php'; ?>