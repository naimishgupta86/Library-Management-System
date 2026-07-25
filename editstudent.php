<?php
include("db.php");
include("header.php");
include("sidebar.php");

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="container">

<div class="form-box">

<h2>✏ Edit Student</h2>

<form action="updatestudent.php" method="post">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<label>Student Name</label>
<input type="text"
name="student_name"
value="<?php echo $row['student_name']; ?>"
required>

<label>Course</label>
<input type="text"
name="course"
value="<?php echo $row['course']; ?>"
required>

<label>Mobile Number</label>
<input type="text"
name="mobile"
value="<?php echo $row['mobile']; ?>"
maxlength="10"
required>

<label>Email</label>
<input type="email"
name="email"
value="<?php echo $row['email']; ?>"
required>

<input type="submit" value="💾 Update Student">

</form>

</div>

</div>

<?php include("footer.php"); ?>