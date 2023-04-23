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


    <div class="wrapper-header">
        <div class="site-identity">
            <h1><a href="#">Site Name</a></h1>
        </div>  
        <nav class="site-navigation">
            <ul class="nav">
            <li><a href="index.php">About</a></li> 
            <li><a href="">News</a></li> 
            <li><a href="">Contact</a></li>

            <?php
                if(isset($_SESSION["usersuid"])){
                    echo '<li><a href="profile.php">Profile Page</a></li>';
                    echo '<li><a href="logout.php">Log out</a></li>';
                }
                else{
                    echo '<li><a href="signup.php">Sign up</a></li>';
                    echo '<li><a href="login.php">Log in</a></li>';
                }
            ?>
            
        </nav>
    </div>