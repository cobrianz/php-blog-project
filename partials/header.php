<?php
require './config/database.php';

//fetch current user from database

if(isset($_SESSION['user-id'])){
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT avatar FROM users WHERE id = $id";
    $result = mysqli_query($connection, $query);
    $avatar = mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="<?= ROOT_URL ?>/css/style.css">
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
                <?php if (isset($_SESSION['user-id'])) :  ?>
                    <li class="nav__profile">
                        <div class="avatar">
                            <img src="<?= ROOT_URL .'assets/'.$avatar['avatar'] ?>" alt="">
                        </div>
                        <ul>
                            <li><a href="<?= ROOT_URL ?>Admin/index.php">Dashboard</a></li>
                            <li><a href="<?= ROOT_URL ?>logout.php">Logout</a></li>
                        </ul>
                    </li>
                    <?php else : ?>
                    <li><a href="<?= ROOT_URL ?>signin.php">Signin</a></li>

                    <?php endif ?>
            </ul>
            <button id="open__nav-btn"><img src="./images/baseline-density-medium.png" alt=""></button>
            <button id="close__nav-btn"><img src="./images/x.png" alt=""></button>
        </div>
    </nav>