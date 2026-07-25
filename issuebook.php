<?php
include("db.php");
include("header.php");
include("sidebar.php");
?>

<div class="container">

<div class="form-box">

<h2>📚 Issue Book</h2>

<form action="insertissue.php" method="post">

<label>Book ID</label>
<input type="number" name="book_id" placeholder="Enter Book ID" required>

<label>Select Student</label>

<select name="student_name" required>

<option value="">Select Student</option>

<?php

$result=mysqli_query($conn,"SELECT * FROM students");

while($row=mysqli_fetch_assoc($result))
{
?>

<option value="<?php echo $row['student_name']; ?>">
<?php echo $row['student_name']; ?>
</option>

<?php
}
?>

</select>

<label>Issue Date</label>
<input type="date" name="issue_date" required>

<label>Return Date</label>
<input type="date" name="return_date" required>

<input type="submit" value="Issue Book">

</form>

</div>

</div>

<?php include("footer.php"); ?>