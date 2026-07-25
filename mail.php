
<?php
require("class.phpmailer.php");
require("class.smtp.php");


function sendIssueMail($to,$student,$book,$issue,$return,$id)
{
    $mail = new PHPMailer();

    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;

    
    $mail->Username = "naimishguptaqwqw@gmail.com";
    $mail->Password = "qrvq puyy lnwp jluw";

    $mail->SMTPSecure = "tls";
    $mail->Port = 587;

    $mail->From = "naimishguptaqwqw@gmail.com";
    $mail->FromName = "Library Management System";

    $mail->AddAddress($to,$student);

    $mail->IsHTML(true);

    $mail->Subject = "Book Issued Successfully";

    $mail->Body = "
    <h2>Library Management System</h2>

    Hello <b>$student</b><br><br>

    Your Book has been <b>Issued Successfully</b>.<br><br>

    <b>ID :</b> $id <br>
    <b>Book Name :</b> $book <br>
    <b>Issue Date :</b> $issue <br>
    <b>Return Date :</b> $return <br><br>

    Please return the book before the return date.

    <br><br>

    Thank You.<br>

    <b>Library Management System</b>
    ";

    if(!$mail->Send())
    {
        die($mail->ErrorInfo);
    }

    return true;
}


function sendReturnMail($to,$student,$book,$issue,$return,$id)
{
    $mail = new PHPMailer();

    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;

   
    $mail->Username = "naimishguptaqwqw@gmail.com";
    $mail->Password = "qrvq puyy lnwp jluw";

    $mail->SMTPSecure = "tls";
    $mail->Port = 587;

    $mail->From = "naimishguptaqwqw@gmail.com";
    $mail->FromName = "Library Management System";

    $mail->AddAddress($to,$student);

    $mail->IsHTML(true);

    $mail->Subject = "Book Returned Successfully";

    $mail->Body = "
    <h2>Library Management System</h2>

    Hello <b>$student</b><br><br>

    Your Book has been <b>Returned Successfully</b>.<br><br>

    <b>ID :</b> $id <br>
    <b>Book Name :</b> $book <br>
    <b>Issue Date :</b> $issue <br>
    <b>Return Date :</b> $return <br><br>

    Thank you for returning the book.

    <br><br>

    <b>Library Management System</b>
    ";

    if(!$mail->Send())
    {
        die($mail->ErrorInfo);
    }

    return true;
}
?>