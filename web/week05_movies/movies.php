<?php

try
{
    $dbUrl = getenv('DATABASE_URL');

    $dbopts = parse_url($dbUrl);
    
    $dbHost = $dbopts["host"];
    $dbPort = $dbopts["port"];
    $dbUser = $dbopts["user"];
    $dbPassword = $dbopts["pass"];
    $dbName = ltrim($dbopts["path"],'/');
    
    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}


?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Movies</h1>

    <ul>
        <li>xlksjflsdjflksdjf</li>
        <li>xlksjflsdjflksdjf</li>
        <li>xlksjflsdjflksdjf</li>
        <li>xlksjflsdjflksdjf</li>
        <li>xlksjflsdjflksdjf</li>
    </ul>

</body>
</html>