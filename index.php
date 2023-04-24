<?php
    include_once "header.php"
?>
</head>
<body>

    <section>
        <?php
            // Checks if user is login
            if(isset($_SESSION["useruid"])){
                echo '<p>Hello there ' . $_SESSION["useruid"] . "</p>";
            }

        ?>
        <h1>This is an Introduction</h1>
        <p>Here is an important paragraph that explains the purpose of the website</p>
    </section>


    <section class="index-categories">
        <h2>Some Basic Catagories</h2>
        <div class="index-categories-list">
            <div>
                <h3>Fun stuff</h3>
            </div>
            <div>
                <h3>Serious stuff</h3>
            </div>
            <div>
                <h3>Exciting stuff</h3>
            </div>
            <div>
                <h3>Boring stuff</h3>
            </div>
        </div>
    </section>
</body>
</html>