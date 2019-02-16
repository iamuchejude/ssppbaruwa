<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <link rel="shortcut icon" href="assets/img/logo.jpg">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
    <div class="topBar clear">
        <div class="left login">
            <ul>
                <li>
                    <a href="mailto: ssppbaruwa@gmail.com">
                        <span class="topIcon"><i class="fa fa-envelope"></i></span>
                        <span class="topText">ssppbaruwa@gmail.com</span>
                    </a>
                </li>
                <li>
                    <a href="tel: +2348150817166">
                        <span class="topIcon"><i class="fa fa-phone"></i></span>
                        <span class="topText">(234) 815 081 7166</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="right join">
            <ul>
                <li>
                    <a href="http://localhost:8888/ssppbaruwa/login">
                        <span class="topIcon"><i class="fa fa-user-circle"></i></span>
                        <span class="topText">Login</span>
                    </a>
                </li>
                <li>
                    <a href="http://localhost:8888/ssppbaruwa/register">
                        <span class="topIcon"><i class="fa fa-user-circle"></i></span>
                        <span class="topText">Join Us</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <header class="clear">
        <div class="left logo">
            <a href="http://localhost:8888/ssppbaruwa/">
                <img src="assets/img/logo.png" alt="Logo" class="logo" />
            </a>
        </div>
        <div class="right nav">
            <nav>
                <ul>
                    <li><a href="http://localhost:8888/ssppbaruwa/">Home</a></li>
                    <li class="dropDown"><a href="javascipt:void(0)">About</a>
                        <!-- <ul>
                            <li><a href="">Church History</a></li>
                            <li><a href="">Mission and Vision</a></li>
                            <li><a href="">Church Activities</a></li>
                            <li><a href="">Pastoral Team</a></li>
                        </ul> -->
                    </li>
                    <li><a href="javascipt:void(0)">Programmes</a></li>
                    <li><a href="javascipt:void(0)">Media</a></li>
                    <li><a href="javascipt:void(0)">Blog</a></li>
                    <li><a href="javascipt:void(0)">Contact</a></li>
                </ul>
                <button class="mobileMenu">
                    <div></div>
                    <div></div>
                    <div></div>
                </button>
                <a href="http://localhost:8888/ssppbaruwa/donate" class="modalActivator" data-mod="donate"><button data-mod="donate" class="joinUs">Donate</button></a>
            </nav>
        </div>
    </header>
    <div class="headerClear"></div>