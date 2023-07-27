<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Visual Design </title>
    <!-- <link rel="stylesheet" href="./style.css" /> -->
    <?php wp_head() ?>
    <script src="https://kit.fontawesome.com/68dea98a2a.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="branding">
                    <img src="<?php echo get_template_directory_uri() ?> ./img/home/Brand.svg" alt=""/>
                    <h3>Creative <span>Visual</span> Design</h3>
                </div>
                <div class="header__nav">
                    <!-- <ul>
                        <li class="active"><a href="./home.html">Home</a></li>
                        <li><a href="./about.html">About</a></li>
                        <li><a href="./services.html">Services</a></li>
                        <li><a href="./updates.html">Updates</a></li>
                        <li><a href="./contacts.html">Contact</a></li>
                    </ul> -->
                    <?php  wp_menu_li() ?>
                </div>
                <div class="toggle__menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>