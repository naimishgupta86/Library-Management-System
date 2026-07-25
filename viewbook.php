<?php
include("db.php");
include("header.php");
include("sidebar.php");

if(isset($_GET['search']))
{
    $search=$_GET['search'];

    $sql="SELECT * FROM books
          WHERE book_name LIKE '%$search%'
          OR author LIKE '%$search%'
          ORDER BY id DESC";
}
else
{
    $sql="SELECT * FROM books ORDER BY id DESC";
}

$result=mysqli_query($conn,$sql);
?>

<div class="container">


<h2>📚 View Books</h2>

<form method="get" action="viewbook.php" class="search-form">

<input type="text"
name="search"
placeholder="Search by Book Name or Author"
value="<?php if(isset($_GET['search'])) echo $_GET['search']; ?>">

<input type="submit" value="Search">

<input type="button"
value="Reset"
onclick="window.location='viewbook.php'">

</form>

<table>

<tr>

<th>ID</th>

<th>Book Name</th>

<th>Author</th>

<th>Publisher</th>

<th>Action</th>

</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['book_name']; ?></td>

<td><?php echo $row['author']; ?></td>

<td><?php echo $row['publisher']; ?></td>

<td>

<a class="edit-btn"
href="editbook.php?id=<?php echo $row['id']; ?>">
Edit
</a>

&nbsp;

<a class="delete-btn"
href="deletebook.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Delete this book?')">
Delete
</a>

</td>

</tr>

<?php
}
?>

</table>


</div>

<?php include("footer.php"); ?>