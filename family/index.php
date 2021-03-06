<?php
    session_start();
    $pageTitle = "Dashboard - SS. Peter and Paul | One Faith. One Heart. One Soul.";
    include_once('../functions.php');
    include_once("../src/app.php");
    include_once("../src/database.php");
    include_once('../src/family.php');
    include_once('../src/member.php');
    include_once('../src/sspp.php');
    include_once('templates/header.php');
?>
    <div class="container clear members">
        <div class="memberTable">
            <table class="member">
                <tr>
                    <th>SN</th>
                    <th>Fistname</th>
                    <th>Lastname</th>
                    <th>Gender</th>
                    <th>Status</th>
                    <th>Organization</th>
                    <th>Options</th>
                </tr>
                <?php
                    $count = 1;
                    while($member = $getMembers->fetch_array()) {
                ?>
                <tr>
                    <td><?= $count++; ?></td>
                    <td><?= $member['first_name']; ?></td>
                    <td><?= $member['other_name']; ?></td>
                    <td><?= $member['gender']; ?></td>
                    <td><?= $member['status']; ?></td>
                    <td><?= $member['organization']; ?></td>
                    <td class="options">
                        <a href="view?id=<?= $member['id'] ?>"><button class="table-btn info"><i class="fa fa-eye"></i> Info</button></a>
                        <a href="?action=delete&id=<?= $member['id'] ?>"><button class="table-btn danger"><i class="fa fa-trash"></i> Delete</button></a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
<?php
    include_once('templates/footer.php');
?>