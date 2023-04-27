<?php
    include_once "header.php";

    include "classes/dbh.classes.php";
    include "classes/profileinfo.classes.php";
    include "classes/profileinfo-view.classes.php";

    $profileInfo = new ProfileInfoView();


?>
</head>
<body>

    <div>
        
        <section>
            <a href="profilesettings.php">Profile Settings</a>

            <p>
                <?php
                    echo "hello " . $_SESSION["useruid"];
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