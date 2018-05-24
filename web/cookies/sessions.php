<?php

session_start();

// $_SESSION["username"] = "burton";
// $_SESSION["displayName"] = "Scott Burton";
// $_SESSION["zip"] = 83440;


// echo($_SESSION["zip"]);



if (isset($_SESSION["session-count"])) {
    $_SESSION["session-count"]++;
} else {
    $_SESSION["session-count"] = 0;
}

$sessionCount = $_SESSION["session-count"];

?>
<html>
    <body>
        You have visited the page: <?php echo $sessionCount; ?> times
    </body>
</html>
