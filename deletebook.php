<?php
include("db.php");
$id=$_GET['id'];
$sql="DELETE FROM books WHERE id='$id'";
if(mysqli_query($conn,$sql))
{
echo "<script>
            alert('Book Deleted Successfully');
            window.location='viewbook.php';
            </script>";
            exit();
exit();
}
else
{
echo "<script>
            alert('Book Not Deleted');
            window.location='viewbook.php';
            </script>";
            exit();
}
?>