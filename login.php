<?php
    session_start();
    include_once(__DIR__ . '/functions.php');
    Functions::getTemplate('header', 'Login | SS. Peter and Paul |  One Faith. One Heart. One Soul.');
    include_once(__DIR__ . "/src/app.php");
    include_once(__DIR__ . "/src/database.php");
    include_once(__DIR__ . "/src/access.php");
    include_once(__DIR__ . "/src/script.php");
?>
    <div class="pageHeader">
        <h3>Login</h3>
        <p>Sign in to your Family's Account</p>
    </div>
    <div class="clear formLayout login">
        <?php
            if(isset($logMessage)) {
                echo "<div class='message ".$mes."'>".$logMessage."</div>";
            }
        ?>
        <form name="login" name="login" method="POST">
            <div class="input-row one clear">
                <div class="input-group">
                    <label>Name<span class="required">*</span></label>
                    <input type="text" name="lName" placeholder="Family Name" required />
                </div>
            </div>
            <div class="input-row one clear">
                <div class="input-group">
                    <label>Passkey<span class="required">*</span></label>
                    <input type="password" name="lPasskey" placeholder="Passkey" required />
                </div>
            </div>
            <div class="btn-group">
                <button class="submitBtn full" name="login" type="submit">Login</button>
            </div>
        </form>
        <p class="forgotLink">
            <a href="<?= $app_url; ?>/forgot">Forgot Passkey?</a>
        </p>
        <div class="btn-group">
            <p>Are you a new member?</p>
            <a href="<?= $app_url; ?>/register"><button class="regBtn full">Join Us</button></a>
        </div>
    </div>
<?php
Functions::getTemplate('footer');
?>