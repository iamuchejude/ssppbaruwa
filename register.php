<?php
    session_start();
    include_once(__DIR__.'/functions.php');
    Functions::getTemplate('header', 'Join us | SS. Peter and Paul |  One Faith. One Heart. One Soul.');
    include_once(__DIR__ . "/src/app.php");
    include_once(__DIR__ . "/src/database.php");
    include_once(__DIR__ . "/src/access.php");
    include_once(__DIR__ . "/src/script.php");
?>
    <div class="pageHeader">
        <h3>Join Us</h3>
        <p>Register now to get a family account with us</p>
    </div>
    <div class="clear formLayout register">
        <p class="formInfo"><b><i class="fa fa-info-circle"></i></b> <span class="content">All fields marked (<span class="required">*</span>) are important</span></p>
        <?php
            if(isset($regMessage)) {
                echo "<div class='message ".$mes."'>".$regMessage."</div>";
            }
        ?>
        <form name="register" method="POST">
            <div class="input-row one clear">
                <div class="input-group">
                    <label>Name<span class="required">*</span></label>
                    <input type="text" name="name" placeholder="Family Name" required />
                </div>
            </div>
            <div class="input-row two clear">
                <div class="input-group">
                    <label>Phone Number<span class="required">*</span></label>
                    <input type="text" name="phoneNumber" placeholder="Family Contact Number" required />
                </div>
                <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Family Contact Email" />
                </div>
            </div>
            <div class="input-row one clear">
                <div class="input-group">
                    <label>Address<span class="required">*</span></label>
                    <input type="text" name="address" placeholder="Residential Address" required />
                </div>
            </div>
            <div class="input-row one clear">
                <div class="input-group">
                    <label>Basic Christain Community<span class="required">*</span></label>
                    <select name="bcc" required>
                        <option value="Unique Estate Commnunity">Unique Estate Community</option>
                        <option value="Peace Estate Community">Peace Estate Community</option>
                        <option value="New London Community">New London Community</option>
                        <option value="Two Storey Community">Two Storey Commnunity</option>
                    </select>
                </div>
            </div>
            <div class="input-row three clear">
                <div class="input-group">
                    <div class="input-group">
                        <label>Nationality<span class="required">*</span></label>
                        <select name="nationality" required>
                            <?php
                                $getCountries = $conn->query("SELECT * FROM countries");
                                while($country = $getCountries->fetch_assoc()) {
                            ?>
                                <option value="<?= $country['rename'] ?>"><?= $country['rename'] ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-group">
                        <label>State of Origin<span class="required">*</span></label>
                        <input type="text" name="state" placeholder="State of Origin" required />
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-group">
                        <label>LGA<span class="required">*</span></label>
                        <input type="text" name="lga" placeholder="Local Governent Area" required />
                    </div>
                </div>
            </div>
            <div class="btn-group">
                <p>By signup, you agree that the data provided above are real and valid.</p>
                <button class="submitBtn full" name="register" type="submit">Register</button>
            </div>
        </form>
        <hr color="#f2f2f2" />
        <div class="btn-group">
            <p>Already registered?</p>
            <a href="<?= $app_url; ?>/login"><button class="regBtn full">Login</button></a>
        </div>
    </div>
<?php
    Functions::getTemplate('footer');
?>