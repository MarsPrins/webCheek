<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/favicon.png" id="faviconTag">
    <title><?= $title ?></title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="<?=$css?>.css">
    <script src="<?=$js?>.js" defer></script>
    <script src="scripts/header.js"></script>
</head>
<body>
    <div class="headerReplace"></div>
    <header>
        <div class="headCont">
            <a class="logoA" href="/"><img src="/img/logo.png" alt="WebCheek" class="logo"></a>
            <a href=""><button>Website aanvragen</button></a>
        </div>
        <nav>
            <div class="dropMenu">
                <div id="sidebar">
                    <div class="toggle-btn" onclick="myFunction(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
        
                    <ul id="menu">
                        <li><a onclick="" class="current" >Home</a></li>
                        <li><a onclick="" >Tarieven</a></li>
                        <li>Websites <i class="fa-solid fa-caret-down"></i>
                            <div class="dropdownHeads topHead">Website laten maken</div>
                            <div class="dropdownHeads">Website onderhouden</div>
                            <div class="dropdownHeads">Website vernieuwen</div>
                        </li>
                        <li><a onclick="" >Portfolio</a></li>
                        <li><a onclick="" >Contact</a></li>
                        <li><a onclick="" >Over ons</a></li>
                        <li><a onclick="" >Blog</a></li>
                        <li>Taal <i class="fa-solid fa-caret-down"></i>
                            <div class="dropdownHeads topHead">Nederlands</div>
                            <div class="dropdownHeads">English</div>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="landNav">
                <li><a href="/" class="linksx current">Home</a></li>
                <li><a href="/" class="linksx">Tarieven</a></li>
                <li class="dropdown">
                    <button class="dropbtn links">Websites <i class="fa-solid fa-caret-down"></i></button>
                    <div class="dropdown-content">
                        <a href="#">Website laten maken</a>
                        <a href="#">Website onderhouden</a>
                        <a href="#">Website vernieuwen</a>
                    </div>
                </li>
                <li><a href="/" class="linksx" >Portfolio</a></li>
                <li><a href="/" class="linksx">Contact</a></li>
                <li><a href="/" class="linksx">Over ons</a></li>
                <li><a href="/" class="linksx">Blog</a></li>
                <li class="dropdown">
                    <button class="dropbtn links">Taal <i class="fa-solid fa-caret-down"></i></button>
                    <div class="dropdown-content">
                        <a href="#">Nederlands</a>
                        <a href="#">English</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>