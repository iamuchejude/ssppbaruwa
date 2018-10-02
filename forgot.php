<?php
    session_start();
    include_once(__DIR__ . '/functions.php');
    Functions::getTemplate('header', 'Recover Password | SS. Peter and Paul |  One Faith. One Heart. One Soul.');
    include_once(__DIR__ . "/src/app.php");
    include_once(__DIR__ . "/src/database.php");
    include_once(__DIR__ . "/src/access.php");
    include_once(__DIR__ . "/src/script.php");
?>
    <div class="pageHeader">
        <h3>Recover Password</h3>
        <p>Recover lost password with phone number.</p>
    </div>
    <div class="clear formLayout login">
        <?php
            if (isset($recMessage)) {
                echo "<div class='message ".$mes."'>".$recMessage."</div>";
            }
        ?>
        <form name="login" name="login" method="POST">
            <div class="input-row one clear">
                <div class="input-group">
                    <label>Phone Number<span class="required">*</span></label>
                    <input type="text" name="phoneNumber" placeholder="Phone Number" required />
                </div>
            </div>
            <div class="btn-group">
                <button class="submitBtn full" name="recover" type="submit">Recover</button>
            </div>
        </form>
        <div class="btn-group forgot">
            <p class="btn-info">Have Valid Credentials?</p>
            <a href="<?= $app_url; ?>/login"><button class="regBtn full">Login</button></a>
        </div>
    </div>
<?php
Functions::getTemplate('footer');
?>