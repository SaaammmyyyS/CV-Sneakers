<?php
    include_once "header.php"
?>
</head>
<body>

    <div class="wrapper">
        <section class="signup-form">
            <h2>Sign up</h2>
            <div class="signup-form-form">
                <form action="includes/signup.inc.php" method = "post">
                    <input type="text" name="name" placeholder="Full name">
                    <input type="text" name="email" placeholder="Email">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </div>

            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<p>Fill in all fields</p>";
                    }
                    elseif($_GET["error"] == "invaliduid"){
                        echo "<p>Choose a proper username!</p>";
                    }
                    elseif($_GET["error"] == "invalidemail"){
                        echo "<p>Choose a proper email!</p>";
                    }
                    elseif($_GET["error"] == "passwordsdontmatch"){
                        echo "<p>Password doesn't match</p>";
                    }
                    elseif($_GET["error"] == "usernametaken"){
                        echo "<p>Username already taken</p>";
                    }
                    elseif($_GET["error"] == "error"){
                        echo "<p>Something went wrong, Try again!</p>";
                    }
                    elseif($_GET["error"] == "none"){
                        echo "<p>You have signed up!</p>";
                    }
                }
            ?>
        </section>
    </div>
</body>
</html>