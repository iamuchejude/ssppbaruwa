<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageTitle; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/lnricons.css">
</head>
<body>
    <div class="body clear">
        <aside class="sidebar clear">
            <header class="clear">
                <a href="#">
                    <img class="logo" src="../assets/img/logo.png">
                </a>
            </header>
            <ul>
                <li class="active"><a href="index">
                    <span class="sideIcon"><i class="lnr lnr-home"></i></span>
                    <span class="sideText"> Home</span>
                </a></li>
                <li><a href="new">
                    <span class="sideIcon"><i class="lnr lnr-plus-circle"></i></span>
                    <span class="sideText"> New Member</span>
                </a></li>
                <li><a href="profile">
                    <span class="sideIcon"><i class="lnr lnr-user"></i></span>
                    <span class="sideText"> Profile</span>
                </a></li>
                <li><a href="settings">
                    <span class="sideIcon"><i class="lnr lnr-cog"></i></span>
                    <span class="sideText"> Settings</span>
                </a></li>
            </ul>
        </aside>
        <div class="page clear">
            <div class="pageContent clear">          
                <div class="pageHeader clear">
                    <div class="left sideToggle">
                        <button class="canvasTrigger">
                            <i class="lnr lnr-arrow-left-circle"></i>
                        </button>
                    </div>
                    <div class="right logout">
                        <a href="?logout">
                            <span class="logIcon"><i class="lnr lnr-power-switch"></i></span>
                            <span class="logText">Logout</span>
                        </a>
                    </div>
                </div>
                    <div class="pageContainer">