<!DOCTYPE html>
<html>
<body>

<?php

$name = htmlspecialchars($_POST["name"]);

echo "<h1>Welcome $name</h1>";

?>

</body>
</html>