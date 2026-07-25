<?php
include("db.php");
include("mail.php");

$id = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM issue_books WHERE id='$id'");

if(mysqli_num_rows($result)==0)
{
    echo "<script>
    alert('Invalid Issue ID');
    window.location='returnbook.php';
    </script>";
    exit();
}

$row = mysqli_fetch_assoc($result);

$book_id = $row['book_id'];
$book = $row['book_name'];
$student = $row['student_name'];
$issue = $row['issue_date'];
$return = $row['return_date'];
$status = $row['status'];

if($status=="Returned")
{
    echo "<script>
    alert('Book Already Returned');
    window.location='returnbook.php';
    </script>";
    exit();
}

$student_result = mysqli_query($conn,"SELECT * FROM students WHERE student_name='$student'");

if(mysqli_num_rows($student_result)>0)
{
    $student_data = mysqli_fetch_assoc($student_result);
    $to = $student_data['email'];
}
else
{
    $to = "";
}

mysqli_query($conn,"UPDATE issue_books SET status='Returned' WHERE id='$id'");

mysqli_query($conn,"UPDATE books SET quantity=quantity+1 WHERE id='$book_id'");

if($to!="")
{
    sendReturnMail($to,$student,$book,$issue,$return,$id);
}

echo "<script>
alert('Book Returned Successfully');
window.location='viewissued.php';
</script>";
?>