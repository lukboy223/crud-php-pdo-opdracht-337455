<?php require_once APPROOT . '/views/includes/header.php'; ?>

<?php
echo "Hallo " . $data['firstname'] . " " . $data['infix'] . " " . $data['lastname'];
?>

<form action="<?= URLROOT . '/Instructeurs/index'; ?>" method="post">
    <label for="firstname">firstname</label>
    <input type="text" name="firstname" id="firstname">
    <label for="firstname">infix</label>
    <input type="text" name="infix" id="infix">
    <label for="firstname">lastname</label>
    <input type="text" name="lastname" id="lastname">
    <input type="submit" value="send!">
</form>
<?php require_once APPROOT . '/views/includes/footer.php'; ?>

<a href="<?PHP echo URLROOT; ?>/homepages/index">homepage</a>