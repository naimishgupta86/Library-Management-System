<?php
include("db.php");
include("header.php");
include("sidebar.php");

$id = $_POST['id'];

$sql = "SELECT * FROM issue_books WHERE id='$id' AND status='Issued'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
$row = mysqli_fetch_assoc($result);
?>

<div class="container">

<div class="form-box">

<h2>📖 Book Details</h2>

<table>

<tr>
<th>Field</th>
<th>Details</th>
</tr>

<tr>
<td><b>Issue ID</b></td>
<td><?php echo $row['id']; ?></td>
</tr>

<tr>
<td><b>Book ID</b></td>
<td><?php echo $row['book_id']; ?></td>
</tr>

<tr>
<td><b>Book Name</b></td>
<td><?php echo $row['book_name']; ?></td>
</tr>

<tr>
<td><b>Student Name</b></td>
<td><?php echo $row['student_name']; ?></td>
</tr>

<tr>
<td><b>Issue Date</b></td>
<td><?php echo $row['issue_date']; ?></td>
</tr>

<tr>
<td><b>Return Date</b></td>
<td><?php echo $row['return_date']; ?></td>
</tr>

<tr>
<td><b>Status</b></td>
<td>
<span class="status-issued">
<?php echo $row['status']; ?>
</span>
</td>
</tr>

</table>

<br>

<div class="return-btn-box">
    <a href="bookreturn.php?id=<?php echo $row['id']; ?>"
       class="return-btn"
       onclick="return confirm('Return this book?')">
       ↩ Return Book
    </a>
</div>

</div>

</div>

<?php
include("footer.php");
}
else
{
echo "<script>
alert('Book Not Found');
window.location='returnbook.php';
</script>";
}
?>