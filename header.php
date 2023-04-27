<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    
    <title>Document</title>

    <header>
        <img class="logo" src="img/logo.png" alt="">
        <nav>
            <ul class="nav_links">
                <li><a href="index.php">New Releases</a></li> 
                <li><a href="">Men</a></li> 
                <li><a href="">Women</a></li>
                <li><a href="">Kids</a></li>
                <li><a href="">Sale</a></li>
                <li><a href="">Collections</a></li>
            </ul>

        </nav>
        <ul class="nav_links">
            <?php
                if(isset($_SESSION["userid"])){
                    echo '<li><a href="profile.php">' . $_SESSION["useruid"] . '</a></li>';
                    echo '<li><a href="includes/logout.inc.php">Logout</a></li>';
                }

                else{
                    echo '<li><a href="signup.php">Sign up</a></li>';
                    echo '<li><a href="login.php">Login</a></li>';
                }
            ?>
        </ul>
    </header>