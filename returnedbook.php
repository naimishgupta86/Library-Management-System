
<?php
include("db.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Return Book</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h2>Return Book</h2>
<form action="searchreturn.php" method="post">
<label>Enter Book ID</label>
<input type="number" name="book_id" required>
<input type="submit" value="Search Book">
</form>
</div>
</body>
</html>
