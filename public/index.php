<!DOCTYPE html>
<html lang="de">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8">
    <title>Steffen Kahl - Portfolio</title>
    <link rel="stylesheet" type="text/css" href="_resources/app/client/dist/css/styles.min.css"/>
</head>
<body>
    <header>
        <div class="header_bar_right">
            <div class="header_dark_mode-toggle" data-behaviour="toggle-darkmode">
                <img src="images/icons/lightmode.svg">
            </div>
        </div>

        <div class="header_bar">

            <div class="header_bar_nav-toggle" data-behaviour="toggle-menu">
                <span></span><span></span><span></span><span></span>
            </div>

            <div class="header_bar_nav">
                <ul>
                    <a href="#gamedesign">
                        <li>
                            <img src="../public/images/icons/gamedesign.svg">
                            <p>Gamedesign</p>
                        </li>
                    </a>
                    <a href="#graphicdesign">
                        <li>
                            <img src="../public/images/icons/graphicdesign.svg">
                            <p>Graphicdesign</p>
                        </li>
                    </a>
                    <a href="#webdev">
                        <li>
                            <img src="../public/images/icons/webdev.svg">
                            <p>Web Development</p>
                        </li>
                    </a>
                    <a href="#eventtech">
                        <li>
                            <img src="../public/images/icons/eventtech.svg">
                            <p>Event Technician</p>
                        </li>
                    </a>
                    <a href="#skills">
                        <li>
                            <img src="../public/images/icons/resume.svg">
                            <p>Skills</p>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </header>

    <?php
        include "sections/section-introduction.php";
        include "sections/section-gamedesign.php";
        include "sections/section-graphicdesign.php";
        include "sections/section-webdev.php";
        include "sections/section-eventtech.php";
        include "sections/section-skill.php";
        include "sections/section-contact.php";
    ?>

    <footer>
        <div class="footer_icon">
            <svg width="100%" height="100%" viewBox="0 0 4096 4096" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                <path id="path_white" d="M2197.81,907.887l-0,2280.22l1205.88,-2280.22l-1205.88,0Zm-1249.78,2.64c-107.841,0 -214.124,17.112 -318.855,51.331c-104.73,34.219 -196.885,83.6 -278.803,148.927c-81.918,64.29 -146.728,140.508 -194.427,228.647c-46.662,88.14 -69.99,183.536 -69.99,286.192c-0,78.808 20.22,162.283 60.66,250.423c40.441,88.14 88.139,170.573 143.096,247.307c55.995,75.696 108.876,142.06 158.649,199.091c49.773,55.995 123.23,129.624 123.23,129.624l1106.92,-1189.08c-0,0 -38.706,-61.473 -91.59,-107.098c-51.847,-46.662 -112.648,-87.231 -180.049,-122.487c-66.364,-36.293 -140.507,-65.846 -222.425,-88.658c-80.881,-22.813 -159.686,-34.221 -236.419,-34.221Z" fill="currentColor" style="fill-rule:nonzero;"/>
                <path id="path_black" d="M3401.79,907.887l-1025.07,2280.22l499.338,0l176.442,-765.262l339.955,0c0,0 608.373,30.52 617.492,-721.703c9.12,-752.222 -608.162,-793.26 -608.162,-793.26Zm-1955.87,804.779c78.495,69.381 122.181,103.115 200.249,186.015c63.253,67.401 119.766,144.134 169.539,230.2c50.81,86.066 76.215,168.502 76.215,247.309c-0,115.1 -23.85,222.942 -71.549,323.525c-46.662,99.545 -111.989,186.13 -195.981,259.752c-83.992,72.586 -180.427,129.099 -289.305,169.539c-108.878,39.404 -220.349,59.106 -334.412,59.106c-118.211,-0 -231.237,-15.554 -339.078,-46.662c-221.067,-61.423 -368.907,-154.85 -481.061,-362.036l1265.38,-1066.75Z" style="fill:#010101;fill-rule:nonzero;"/></svg>
        </div>
        <div class="footer_menu">
            <a class="button" href="impressum.php">Impressum</a>
        </div>
    </footer>

    <script src="../public/_resources/app/client/dist/js/main.js"></script>
</body>
