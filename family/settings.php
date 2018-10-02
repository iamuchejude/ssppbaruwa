<?php
    session_start();
    $pageTitle = "Settings - SS. Peter and Paul | One Faith. One Heart. One Soul.";
    include_once('../functions.php');
    include_once("../src/app.php");
    include_once("../src/database.php");
    include_once('../src/sspp.php');
    include_once('templates/header.php');
    include_once('../src/family.php');
    include_once('../src/member.php');
?>
    <div class="container clear">
        <form class="containForm settings clear" method="POST">
            <div class="input-group">
                <label>Family Name</label>
                <input type="text" name="name" value="<?= $family['name']; ?>">
            </div>
            <div class="input-group">
                <label>Phone Number</label>
                <input type="text" name="phoneNumber" value="<?= $family['phone_number']; ?>">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" value="<?= $family['email']; ?>">
            </div>
            <div class="input-group">
                <label>Address</label>
                <input type="text" name="address" value="<?= $family['address']; ?>">
            </div>
            <div class="input-group">
                <label>Basic Christain Community</label>
                <input type="text" name="bcc" value="<?= $family['bcc']; ?>">
            </div>
            <div class="input-group">
                <label>Nationality</label>
                <input type="text" name="nationality" value="<?= $family['nationality']; ?>">
            </div>
            <div class="input-group">
                <label>State</label>
                <input type="text" name="state" value="<?= $family['state']; ?>">
            </div>
            <div class="input-group">
                <label>LGA</label>
                <input type="text" name="lga" value="<?= $family['lga']; ?>">
            </div>
            <div class="input-group">
                <button class="save" type="submit" name="save">Save</button>
            </div>
        </form>
    </div>
<?php
    include_once('templates/footer.php');
?>