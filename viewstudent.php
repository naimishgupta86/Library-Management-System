<?php
include("db.php");
include("header.php");
include("sidebar.php");

$sql="SELECT * FROM students ORDER BY id DESC";
$result=mysqli_query($conn,$sql);
?>

<div class="container">


<h2>👨‍🎓 Student List</h2>

<table>

<tr>
<th>ID</th>
<th>Student Name</th>
<th>Course</th>
<th>Mobile</th>
<th>Email</th>
<th>Action</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['student_name']; ?></td>

<td><?php echo $row['course']; ?></td>

<td><?php echo $row['mobile']; ?></td>

<td><?php echo $row['email']; ?></td>

<td class="action-btns">

<a class="edit-btn"
href="editstudent.php?id=<?php echo $row['id']; ?>">
Edit
</a>

<a class="delete-btn"
href="deletestudent.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Delete this student?')">
Delete
</a>

</td>

</tr>

<?php
}
?>

</table>

</div>

</div>
