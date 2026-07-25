<?php
include("db.php");
include("header.php");
include("sidebar.php");

$id = $_GET['id'];

$sql = "SELECT * FROM books WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="container">

<div class="form-box">

<h2>✏ Edit Book</h2>

<form action="updatebook.php" method="post">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<label>Book Name</label>
<input type="text" name="book_name"
value="<?php echo $row['book_name']; ?>" required>

<label>Author</label>
<input type="text" name="author"
value="<?php echo $row['author']; ?>" required>

<label>Publisher</label>
<input type="text" name="publisher"
value="<?php echo $row['publisher']; ?>" required>

<input type="submit" value="Update Book">

</form>

</div>

</div>

<?php include("footer.php"); ?>