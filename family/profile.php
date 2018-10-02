<?php
    session_start();
    $pageTitle = "Profile - SS. Peter and Paul | One Faith. One Heart. One Soul.";
    include_once('../functions.php');
    include_once("../src/app.php");
    include_once("../src/database.php");
    include_once('../src/sspp.php');
    include_once('templates/header.php');
?>
    <div class="container clear profile">
        <div class="input-group">
            <label>Family Name</label>
            <p><?= $family['name']; ?></p>
        </div>
        <div class="input-group">
            <label>Phone Number</label>
            <p><?= $family['phone_number']; ?></p>
        </div>
        <div class="input-group">
            <label>Email</label>
            <p>
                <?php 
                    if($family['email'] != NULL) {
                        echo $family['email'];
                    } else {
                        echo "No Email";
                    }
                ?>
            </p>
        </div>
        <div class="input-group">
            <label>Address</label>
            <p><?= $family['address']; ?></p>
        </div>
        <div class="input-group">
            <label>Basic Christain Community</label>
            <p><?= $family['bcc']; ?></p>
        </div>
        <div class="input-group">
            <label>Nationality</label>
            <p><?= $family['nationality']; ?></p>
        </div>
        <div class="input-group">
            <label>State</label>
            <p><?= $family['state']; ?></p>
        </div>
        <div class="input-group">
            <label>LGA</label>
            <p><?= $family['lga']; ?></p>
        </div>
    </div>
<?php
    include_once('templates/footer.php');
?>