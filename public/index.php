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
                    <a href="#aboutme">
                        <li>
                            <img src="images/icons/aboutme.svg">
                            <p>About Me</p>
                        </li>
                    </a>
                    <a href="#gamedesign">
                        <li>
                            <img src="images/icons/gamedesign.svg">
                            <p>Gamedesign</p>
                        </li>
                    </a>
                    <a href="#graphicdesign">
                        <li>
                            <img src="images/icons/graphicdesign.svg">
                            <p>Graphicdesign</p>
                        </li>
                    </a>
                    <a href="#webdev">
                        <li>
                            <img src="images/icons/webdev.svg">
                            <p>Web Development</p>
                        </li>
                    </a>
                    <a href="#eventtech">
                        <li>
                            <img src="images/icons/eventtech.svg">
                            <p>Event Technician</p>
                        </li>
                    </a>
                    <a href="#skills">
                        <li>
                            <img src="images/icons/resume.svg">
                            <p>Skills</p>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </header>

    <?php
        include "sections/section-introduction.php";
        include "sections/section-aboutme.php";
        include "sections/section-gamedesign.php";
        include "sections/section-graphicdesign.php";
        include "sections/section-webdev.php";
        include "sections/section-eventtech.php";
        include "sections/section-skill.php";
        include "sections/section-contact.php";
    ?>

    <footer>
        <div class="footer_icon">
        <svg clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" version="1.1" viewBox="0 0 4096 4096" xmlns="http://www.w3.org/2000/svg">
            <path id="path_white" d="m2309.6 907.89v2280.2l1588.6-2280.2zm-1249.8 2.64c-107.84 0-214.12 17.112-318.86 51.331-104.73 34.219-196.88 83.6-278.8 148.93-81.918 64.29-146.73 140.51-194.43 228.65-46.662 88.14-69.99 183.54-69.99 286.19 0 78.808 20.22 162.28 60.66 250.42 40.441 88.14 88.139 170.57 143.1 247.31 55.995 75.696 108.88 142.06 158.65 199.09 49.773 55.995 123.23 129.62 123.23 129.62l1106.9-1189.1s-38.706-61.473-91.59-107.1c-51.847-46.662-112.65-87.231-180.05-122.49-66.364-36.293-140.51-65.846-222.42-88.658-80.881-22.813-159.69-34.221-236.42-34.221z" fill="CurrentColor"/>
            <path id="path_black" d="m3120.9 2026.3-612.45 1161.8 1389.8-4.7183zm-1563.2-313.67c78.495 69.381 122.18 103.12 200.25 186.02 63.253 67.401 119.77 144.13 169.54 230.2 50.81 86.066 76.215 168.5 76.215 247.31 0 115.1-23.85 222.94-71.549 323.52-46.662 99.545-111.99 186.13-195.98 259.75-83.992 72.586-180.43 129.1-289.3 169.54-108.88 39.404-220.35 59.106-334.41 59.106-118.21 0-231.24-15.554-339.08-46.662-221.07-61.423-368.91-154.85-481.06-362.04l1265.4-1066.8z" fill="#010101"/>
        </svg>
        </div>
        <div class="footer_menu">
            <span class="button_wrap">
                <a class="button" href="impressum.php">Impressum</a>
            </span>
        </div>
    </footer>

    <script src="_resources/app/client/dist/js/main.js"></script>
</body>
