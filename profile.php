<?php
    include_once "header.php";

    include "classes/dbh.classes.php";
    include "classes/profileinfo.classes.php";
    include "classes/profileinfo-contr.classes.php";
    include "classes/profileinfo-view.classes.php";

    $profileInfo = new ProfileInfoView();


?>
</head>
<body>

    <div>
        <h1>This is an example!</h1>
    </div>
    
    <div>
        <section>
            <p>
                <?php
                    echo $_SESSION["useruid"];
                ?>
            </p>
            <p>
                <?php
                    $profileInfo->fetchAbout($_SESSION["userid"]);
                ?>
            </p>

            <p>
                <?php
                    $profileInfo->fetchTitle($_SESSION["userid"]);
                ?>
            </p>

            <p>
                <?php
                    $profileInfo->fetchText($_SESSION["userid"]);
                ?>
            </p>

            
        </section>
    </div>
</body>
</html>