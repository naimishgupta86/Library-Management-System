<?php
include("db.php");

$book_name=$_POST['book_name'];
$author=$_POST['author'];
$publisher=$_POST['publisher'];

$quantity=$_POST['quantity'];
$sql="INSERT INTO books(book_name,author,publisher,quantity)VALUES('$book_name','$author','$publisher','$quantity')";

if(mysqli_query($conn,$sql))
{
 echo "<script>
            alert('Book Added Successfully');
			window.location='addbook.php';
            </script>";
            exit();
}
else
{

 echo "<script>
            alert('Book Not Found');
            window.location='addbook.php';
            </script>";
            exit();
}
?>