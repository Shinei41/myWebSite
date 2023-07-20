<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/style.css">
    <script src="https://kit.fontawesome.com/c594fec3c2.js" crossorigin="anonymous"></script>
    <?php wp_head();?>
</head>
<body>

    <div id="js-loader" class="loader">
        <div class="trinity-rings-spinner">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
          </div>
        <p id="value">0%</p>
    </div>

    <nav>
        <div class="logo">
            <img src="<?php bloginfo("template_url");?>/imgandicon/icons2.png" alt="">
        </div>
        <ul class="nav-links">
            <li><a href="<?php bloginfo("url");?>/">Home</a></li>
            <li><a href="<?php bloginfo("url");?>/about">About</a></li>
            <li><a href="<?php bloginfo("url");?>/portfolio">Portfolio</a></li>
            <li><a href="<?php bloginfo("url");?>/contact">Contact</a></li>

            <div class="icons">
                <h4>sns</h4>
                <div class="flex-icons">
                    <div class="tuwiter">
                        <a href="#"> <i class="fa-brands fa-twitter"></i></a>
                     </div>
                     <div class="tuwiter">
                         <a href="#"><i class="fa-brands fa-youtube"></i></a>
                     </div>
                </div>
            </div>
        </ul>

        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>