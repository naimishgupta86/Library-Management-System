<?php
include("db.php");
$id=$_POST['id'];
$student_name=$_POST['student_name'];
$course=$_POST['course'];
$mobile=$_POST['mobile'];

$sql="UPDATE students SET student_name='$student_name',course='$course',mobile='$mobile' WHERE id='$id'";
if(mysqli_query($conn,$sql))
{
echo "<script>
alert('Student Updated Successfully');
window.location='viewstudent.php';
</script>";
}
else
{
echo "<script>
alert('Student Not Updated');
window.location='viewstudent.php';
</script>";
}
?>