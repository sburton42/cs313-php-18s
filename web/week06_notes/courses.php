<?php

require("dbConnect.php");

$db = get_db();

if (!isset($db)) {
	die("DB Connection was not set");
}

$query = "SELECT id, name, number FROM course";

$statement = $db->prepare($query);

// Bind any variables I need, here...

$courses = $statement->execute()->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Courses</h1>

	<ul>

<?php
var_dump($courses);
?>		
		<li><p>Course 1</p></li>
		<li><p>Course 2</p></li>
		<li><p>Course 3</p></li>
		<li><p>Course 4</p></li>
	</ul>

</body>
</html>