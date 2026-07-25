<?php
include("db.php");
include("header.php");
include("sidebar.php");

$sql="SELECT * FROM issue_books WHERE status='Issued' ORDER BY id DESC";
$result=mysqli_query($conn,$sql);
?>

<div class="container">


<h2>📖 Issued Books</h2>

<table>

<tr>
<th>ID</th>
<th>Book ID</th>
<th>Book Name</th>
<th>Student Name</th>
<th>Issue Date</th>
<th>Return Date</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['book_id']; ?></td>

<td><?php echo $row['book_name']; ?></td>

<td><?php echo $row['student_name']; ?></td>

<td><?php echo $row['issue_date']; ?></td>

<td><?php echo $row['return_date']; ?></td>

<td>
<span class="status-issued">
<?php echo $row['status']; ?>
</span>
</td>

<td class="action-btns">

<a class="return-btn"
href="bookreturn.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Return this book?')">
Return
</a>

</td>

</tr>

<?php
}
?>

</table>

</div>


