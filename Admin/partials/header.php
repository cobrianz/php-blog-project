<?php

require 'config/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">
</head>

<body>
    <nav>
        <div class="container nav__container">
            <a href="<?= ROOT_URL ?>" class="nav__logo">BRIANZ</a>
            <ul class="nav__items">
                <li><a href="<?= ROOT_URL ?>blog.php">Blog</a></li>
                <li><a href="<?= ROOT_URL ?>about.php">About</a></li>
                <li><a href="<?= ROOT_URL ?>services.php">Services</a></li>
                <li><a href="<?= ROOT_URL ?>contact.php">Contact</a></li>
<!--                 <li><a href="<?= ROOT_URL ?>signin.php">Signin</a></li>
 -->                <li class="nav__profile">
                    <div class="avatar">
                        <img src="../images/avatar1.jpg" alt="">
                    </div>
                    <ul>
                        <li><a href="<?= ROOT_URL ?>Admin/index.php">Dashboard</a></li>
                        <li><a href="<?= ROOT_URL ?>signup.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <button id="open__nav-btn"><img src="<?= ROOT_URL ?>images/baseline-density-medium.png" alt=""></button>
            <button id="close__nav-btn"><img src="<?= ROOT_URL ?>images/x.png" alt=""></button>
        </div>
    </nav>