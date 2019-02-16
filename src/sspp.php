<?php
    if(!isset($_SESSION['uid'])) {
        header('location: '.$app_url.'/login');
    }

    $uid = $_SESSION['uid'];
    $getCurFamily = $conn->query("SELECT * FROM families WHERE families.id='$uid'");
    $family = $getCurFamily->fetch_assoc();

    $getMembers = $conn->query("SELECT * FROM members WHERE members.family_id='$uid'");

    // Logout Function
    if(isset($_GET['logout'])) {
        unset($_SESSION['uid']);
        session_destroy();
        header('location: '.$app_url.'/login');
    }

    if(isset($_GET['action'])) {
        $uid = $_GET['id'];
        $delete = $conn->query("DELETE FROM members WHERE members.id='$uid'");
        if($delete) {
            echo "<script>alert('Member Deleted');</script>";
        } else {
            echo "<script>alert('Member not Deleted');</script>";
        }
    }

    if(isset($_POST['save'])) {
        $name = trim($_POST['name']);
        $phoneNumber = trim($_POST['phoneNumber']);
        $address = trim($_POST['address']);
        $bcc = trim($_POST['bcc']);
        $nationality = trim($_POST['nationality']);
        $state = trim($_POST['state']);
        $lga = trim($_POST['lga']);
        $email = trim($_POST['email']);
        $update = $conn->query("UPDATE families SET families.name='$name', families.lga='$lga', families.state='$state', families.nationality='$nationality', families.address='$address', families.phone_number='$phoneNumber', families.email='$email', families.bcc='$bcc' WHERE families.id='$uid'");
        if($update) {
            echo "<script>alert('Family Updated');</script>";
        } else {
            echo "<script>alert('Family Update failed');</script>";
        }
    }

    if(isset($_POST['create'])) {
        $surname = trim($_POST['surname']);
        $firstname = trim($_POST['firstname']);
        $othername = trim($_POST['othername']);
        $gender = trim($_POST['gender']);
        $dob = $_POST['dob'];
        $phoneNumber = trim($_POST['phoneNumber']);
        $status = trim($_POST['status']);
        $baptised = trim($_POST['baptised']);
        $communicant = trim($_POST['communicant']);
        $confirmed = trim($_POST['confirmed']);
        $profession = trim($_POST['profession']);
        $soceity = $_POST['soceities'];

        // print_r($_POST['picture']);
        // print_r($_FILES['picture']);
        // die();
        // $photoName = $_FILES['photo']['name'];
        // $tmpPhoto = $_FILES['tmp']['photo'];

        $soceities = implode(', ', $soceity);
        $dob_arr = explode('-', $dob);
        $pred_age = date('Y') - $dob_arr[0];
        if($dob_arr[1] < date('m')) {
            $age = $pred_age - 1;
        } else {
            if($dob_arr[2] < trim(date('d'))) {
                $age = $pred_age - 1;
            } else {
                $age = $pred_age;
            }
        }

        if(($status == 'Married') || ($status == 'Divorced')) {
            if($gender == 'Male') {
                $organization = 'Catholic Men Organization';
            } elseif($gender == 'Female') {
                $organization = 'Catholic Women Organization';
            } else {
                $organization = 'Unknown Organization';
            }
        } else {
            if($age <= 16) {
                $organization = 'Missionary Childhood Association';
            } elseif(($age > 16)) {
                $organization = 'Catholic Youth Organization';
            } else {
                $organization = 'Unknown Organization';
            }
        }
        $member_id = random_int(111111, 999999);
        $family = $uid;
        $created_date = date('D, d M Y H:i:a');
        $updated_date = date('D, d M Y H:i:a');
        $create = $conn->query("INSERT INTO members VALUES('$member_id', '$family', '$surname', '$firstname', '$othername', '$gender', '$dob', '$age', '$phoneNumber', '$baptised', '$communicant', '$confirmed', '$profession', '$status', '$organization', '$soceities', '$created_date', '$updated_date')");
        if($create) {
            echo "<script>alert('Member Created')</script>";
        } else {
            echo "<script>alert('Member Creation Failed')</script>";
        }
    }