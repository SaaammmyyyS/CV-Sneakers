<?php
    include_once "header.php"
?>
</head>
<body>

    <div class="wrapper">
        <section class="signup-form">
            <h2>Log In</h2>
            <div class="signup-form-form">
                <form action="includes/login.inc.php" method = "post">
                    <input type="text" name="name" placeholder="Username/Email">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="submit">Login</button>
                </form>
            </div>
        </section>
    </div>
</body>
</html>