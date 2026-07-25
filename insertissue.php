<?php
include("db.php");
include("mail.php");

$book_id = $_POST['book_id'];
$student_name = $_POST['student_name'];
$issue_date = $_POST['issue_date'];
$return_date = $_POST['return_date'];
$result = mysqli_query($conn,"SELECT * FROM books WHERE id='$book_id'");

if(mysqli_num_rows($result)>0)
{
    $row = mysqli_fetch_assoc($result);

    $book_name = $row['book_name'];
    $quantity = $row['quantity'];

    if($quantity>0)
    {
    
        $student_result = mysqli_query($conn,"SELECT * FROM students WHERE student_name='$student_name'");

        if(mysqli_num_rows($student_result)==0)
        {
            echo "<script>
            alert('Student Not Found');
            window.location='issuebook.php';
            </script>";
            exit();
        }

        $student_data = mysqli_fetch_assoc($student_result);
        $email = $student_data['email'];

        $sql = "INSERT INTO issue_books
        (book_id,book_name,student_name,issue_date,return_date,status)
        VALUES
        ('$book_id','$book_name','$student_name','$issue_date','$return_date','Issued')";

        if(mysqli_query($conn,$sql))
        {
            $id = mysqli_insert_id($conn);

            mysqli_query($conn,"UPDATE books SET quantity=quantity-1 WHERE id='$book_id'");

            if($email!="")
            {
                sendIssueMail($email,$student_name,$book_name,$issue_date,$return_date,$id);
            }

            echo "<script>
            alert('Book Issued Successfully');
            window.location='viewissued.php';
            </script>";
        }
        else
        {
            echo mysqli_error($conn);
        }
    }
    else
    {
        echo "<script>
        alert('Book Out Of Stock');
        window.location='issuebook.php';
        </script>";
    }
}
else
{
    echo "<script>
    alert('Invalid Book ID');
    window.location='issuebook.php';
    </script>";
}
?>