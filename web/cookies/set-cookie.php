<?php
$name = "color";
$value = "blue";

setcookie($name, $value, time() + (86400 * 30));


?>
<html>
    <body>
        A cookie has been set...
    </body>
</html>