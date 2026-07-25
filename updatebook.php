<?php
include("db.php");
$id=$_POST['id'];
$book_name=$_POST['book_name'];
$author=$_POST['author'];
$publisher=$_POST['publisher'];
$price=$_POST['price'];

$sql="UPDATE books SET 
book_name='$book_name',
author='$author',
publisher='$publisher',
price='$price'
WHERE id='$id'";

if(mysqli_query($conn,$sql))
{
echo "<script>
            alert('Book Updated');
            window.location='viewbook.php';
            </script>";
            exit();
}
else
{
echo "<script>
            alert('Book Not Updated');
            window.location='viewbook.php';
            </script>";
            exit();
}
?>

