<?php
    include_once "header.php"
?>
</head>
<body>

    <div class="wrapper-login">
        <section class="signup-form">
            <h2>Log In</h2>
            <div class="signup-form-form">
                <form action="includes/login.inc.php" method = "post">
                    <input type="text" name="uid" placeholder="Username/Email">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="submit">Login</button>
                </form>
            </div>
        </section>

        <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo "<p>Fill in all fields</p>";
                }
                elseif($_GET["error"] == "wronglogin"){
                    echo "<p>Incorrect Login Information!</p>";
                }
                elseif($_GET["error"] == "none"){
                    echo "<p>You have signed in!</p>";
                }
                
            }
        ?>
    </div>
</body>
</html>