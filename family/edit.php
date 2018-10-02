<?php
    session_start();
    $pageTitle = "Edit {User} - SS. Peter and Paul | One Faith. One Heart. One Soul.";
    include_once('../functions.php');
    include_once("../src/app.php");
    include_once("../src/database.php");
    include_once('../src/sspp.php');
    include_once('templates/header.php');
?>
    <div class="container clear">
        Container
    </div>
<?php
    include_once('templates/footer.php');
?>