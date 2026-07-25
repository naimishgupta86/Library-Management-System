<?php
include("db.php");

$books = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS total FROM books"));
$students = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS total FROM students"));
$issued = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS total FROM issue_books WHERE status='Issued'"));
$returned = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS total FROM issue_books WHERE status='Returned'"));
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Library Dashboard</title>
<link rel="stylesheet" href="dashboard.css">
</head>
<body>

<div class="sidebar">
    <h2>📚 Library</h2>

    <a href="dashboard.php">🏠 Dashboard</a>
    <a href="viewbook.php">📚 Books</a>
    <a href="viewstudent.php">👨 Students</a>
    <a href="issuebook.php">📖 Issue Book</a>
    <a href="returnbook.php">🔄 Return Book</a>
    <a href="viewissued.php">📋 Issued Books</a>
    <a href="bookhistory.php">📜 History</a>
    <a href="logout.php">🚪 Logout</a>
</div>

<div class="main">

<h1>Library Management Dashboard</h1>
<div class="topbar">

<div>
<h2>Welcome Admin 👋</h2>
<p><?php echo date("l, d M Y"); ?></p>
</div>



</div>

<div class="quick">

<a href="addbook.php" class="btn bluebtn">➕ Add Book</a>

<a href="addstudent.php" class="btn greenbtn">👨 Add Student</a>

<a href="issuebook.php" class="btn orangebtn">📖 Issue Book</a>

<a href="returnbook.php" class="btn redbtn">🔄 Return Book</a>

</div>

<div class="cards">

<div class="card blue">
<h3>Total Books</h3>
<h1><?php echo $books['total']; ?></h1>
</div>

<div class="card green">
<h3>Total Students</h3>
<h1><?php echo $students['total']; ?></h1>
</div>

<div class="card orange">
<h3>Issued Books</h3>
<h1><?php echo $issued['total']; ?></h1>
</div>

<div class="card red">
<h3>Returned Books</h3>
<h1><?php echo $returned['total']; ?></h1>
</div>

</div>

<h2>Latest Issued Books</h2>

<table>

<tr>
<th>Book ID</th>
<th>Book Name</th>
<th>Student</th>
<th>Issue Date</th>
<th>Status</th>
</tr>

<?php

$result=mysqli_query($conn,"SELECT * FROM issue_books ORDER BY id DESC LIMIT 5");

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['book_id']; ?></td>
<td><?php echo $row['book_name']; ?></td>
<td><?php echo $row['student_name']; ?></td>
<td><?php echo $row['issue_date']; ?></td>
<td><?php echo $row['status']; ?></td>

</tr>

<?php
}
?>

</table>

</div>

</body>
</html>