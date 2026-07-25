<?php
include("db.php");
$student_name=$_POST['student_name'];
$course=$_POST['course'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];

$sql="INSERT INTO students(student_name,course,mobile,email)VALUES('$student_name','$course','$mobile','$email')";

if(mysqli_query($conn,$sql))
{
echo "<script> 
alert('Student Added Successfully');
window.location='addstudent.php';
</script>";

}
else
{
echo "<script>
alert('Student Not Added');
window.location='addstudent.php';
</script>";
}
?>