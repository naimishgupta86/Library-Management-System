<?php
include("db.php");

$id=$_GET['id'];
$result=mysqli_query($conn,"SELECT * FROM issue_books WHERE id='$id'");
$row=mysqli_fetch_assoc($result);
$book_name=$row['book_name'];

mysqli_query($conn,"UPDATE issue_books SET status='Returned' WHERE id='$id'");

mysqli_query($conn,"UPDATE books SET quantity=quantity+1 WHERE book_name='$book_name'");

echo"<script> alert('Book Returned Successfully');
window.location='viewissued.php';
</script>";
?>

