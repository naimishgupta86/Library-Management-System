<?php
include("db.php");
include("header.php");
include("sidebar.php");
?>

<div class="container">

<div class="form-box">

<h2>👨‍🎓 Add Student</h2>

<form action="insertstudent.php" method="post">

<label>Student Name</label>
<input type="text" name="student_name" placeholder="Enter Student Name" required>

<label>Course</label>
<input type="text" name="course" placeholder="Enter Course" required>

<label>Mobile Number</label>
<input type="text" name="mobile" placeholder="Enter Mobile Number" maxlength="10" required>

<label>Email</label>
<input type="email" name="email" placeholder="Enter Email Address" required>

<input type="submit" value="➕ Add Student">

</form>

</div>

</div>

<?php include("footer.php"); ?>