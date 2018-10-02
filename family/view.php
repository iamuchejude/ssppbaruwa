<?php
    session_start();
    include_once('../functions.php');
    $pageTitle = "{Firstname Lastname} - SS. Peter and Paul | One Faith. One Heart. One Soul.";
    include_once("../src/app.php");
    include_once("../src/database.php");
    include_once('../src/sspp.php');
    include_once('templates/header.php');
    include_once('../src/family.php');
    include_once('../src/member.php');
?>
    <div class="container clear profile">
        <?php
            $uid = $_GET['id'];
            $getMember = $conn->query("SELECT * FROM members WHERE members.id='$uid'");
            foreach($getMember as $member) {
        ?>
            <div class="input-group">
                <label>Surname</label>
                <p><?= $member['surname']; ?></p>
            </div>
            <div class="input-group">
                <label>Firstname</label>
                <p><?= $member['first_name']; ?></p>
            </div>
            <div class="input-group">
                <label>Othername</label>
                <p><?= $member['other_name']; ?></p>
            </div>
            <div class="input-group">
                <label>Gender</label>
                <p><?= $member['gender']; ?></p>
            </div>
            <div class="input-group">
                <label>Date of Birth - Age</label>
                <p><?= $member['date_of_birth']; ?> - <?= $member['age']; ?> years old</p>
            </div>
            <div class="input-group">
                <label>Phone Number</label>
                <p>
                    <?php 
                    if ($member['phone_number'] != null) {
                        echo $member['phone_number'];
                    } else {
                        echo "No Phone Number";
                    }
                    ?>
                </p>
            </div>
            <div class="input-group">
                <label>Baptism</label>
                <p><?= $member['baptism']; ?></p>
            </div>
            <div class="input-group">
                <label>Communicant</label>
                <p><?= $member['holy_eucharist']; ?></p>
            </div>
            <div class="input-group">
                <label>Confirmation</label>
                <p><?= $member['confirmation']; ?></p>
            </div>
            <div class="input-group">
                <label>Profession</label>
                <p><?= $member['profession']; ?></p>
            </div>
            <div class="input-group">
                <label>Status</label>
                <p><?= $member['status']; ?></p>
            </div>
            <div class="input-group">
                <label>Organization</label>
                <p><?= $member['organization']; ?></p>
            </div>
            <div class="input-group">
                <label>Soceity(ies)</label>
                <p>
                    <?php 
                    if ($member['Soceities'] != null) {
                        echo $member['Soceities'];
                    } else {
                        echo "No Soceity";
                    }
                    ?>
                </p>
            </div>
            <?php
            }
        ?>
    </div>
<?php
    include_once('templates/footer.php');
?>