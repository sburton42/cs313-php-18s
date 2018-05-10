<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="add.php" method="post">
<input type="hidden" name="item" value="book1">
    <h2>Book #1</h2>
            <input type="button" onclick="handleClick('book1')">
    <h2>Book #2</h2>
            <input type="button" onclick="handleClick('book2')">
</form>


    <h2>Book #1</h2>
        <form action="add.php" method="post">
            <input type="hidden" name="item" value="book1">
            <input type="submit">
        </form>
    <h2>Book #2</h2>
        <form action="add.php" method="post">
            <input type="hidden" name="item" value="book2">
            <input type="submit">
        </form>
</body>
</html>