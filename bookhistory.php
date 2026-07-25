<?php
include("db.php");
include("header.php");
include("sidebar.php");

$sql="SELECT * FROM issue_books ORDER BY id DESC";
$result=mysqli_query($conn,$sql);
?>

<div class="container">

<h2>📜 Book History</h2>

<table>

<tr>
<th>Issue ID</th>
<th>Book ID</th>
<th>Book Name</th>
<th>Student Name</th>
<th>Issue Date</th>
<th>Return Date</th>
<th>Status</th>
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
<?php
if($row['status']=="Issued")
{
?>
<span class="status-issued">Issued</span>
<?php
}
else
{
?>
<span class="status-returned">Returned</span>
<?php
}
?>
</td>

</tr>

<?php
}
?>

</table>

</div>
