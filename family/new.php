<?php
    session_start();
    $pageTitle = "New Member - SS. Peter and Paul | One Faith. One Heart. One Soul.";
    include_once('../functions.php');
    include_once("../src/app.php");
    include_once("../src/database.php");
    include_once('../src/family.php');
    include_once('../src/member.php');
    include_once('../src/sspp.php');
    include_once('templates/header.php');
?>
    <div class="container clear">
        <form class="containForm newUser clear" method="POST">
            <div class="input-group">
                <label>Surname</label>
                <input type="text" name="surname" placeholder="Surname">
            </div>
            <div class="input-group">
                <label>Firstname</label>
                <input type="text" name="firstname" placeholder="Firstname">
            </div>
            <div class="input-group">
                <label>Othername</label>
                <input type="text" name="othername" placeholder="Othername">
            </div>
            <div class="input-group">
                <label>Gender</label>
                <select name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="input-group">
                <label>Date of Birth</label>
                <input type="date" name="dob" placeholder="Date of Birth">
            </div>
            <div class="input-group">
                <label>Upload Photo</label>
                <input type="file" name="picture">
            </div>
            <div class="input-group">
                <label>Phone Number</label>
                <input type="text" name="phoneNumber" placeholder="08110020033">
            </div>
            <div class="input-group">
                <label>Status</label>
                <select name="status" required>
                    <option value="Married">Married</option>
                    <option value="Single">Single</option>
                    </select>
            </div>
            <div class="input-group">
                <label>Are you baptised?</label>
                <select name="baptised" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="input-group">
                <label>Are you a communicant?</label>
                <select name="communicant" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="input-group">
                <label>Are you confirmed?</label>
                <select name="confirmed" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="input-group">
                <label class="soceity">Select Profession</label>
                <select name="profession">
                    <?php
                        $getProfessions = $conn->query("SELECT * FROM professions");
                        while ($row = $getProfessions->fetch_assoc()) {
                    ?>
                        <option value="<?= $row['name'] ?>"><?= $row['name'] ?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <div class="input-group">
                <label class="soceity">Select Soceity(ies) you belong to</label>
                <?php
                    $getSoceities = $conn->query("SELECT * FROM soceities");
                    while($row = $getSoceities->fetch_assoc()) {
                ?>
                    <div class="check">
                        <input type="checkbox" name="soceities[]" value="<?= $row['name'] ?>">
                        <span><?= $row['name'] ?>
                    </div>
                <?php
                    }
                ?>
            </div>
            <div class="input-group">
                <button class="create" type="submit" name="create">Create</button>
            </div>
        </form>
    </div>
<?php
    include_once('templates/footer.php');
?>