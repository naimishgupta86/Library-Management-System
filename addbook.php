<?php
include("db.php");
include("header.php");
include("sidebar.php");
?>

<div class="container">

<div class="form-box">
    <h2>📚 Add New Book</h2>
    <p>Add a new book into the library database.</p>


<form action="insertbook.php" method="post">

<label>Book Name</label>
<input type="text" name="book_name" placeholder="Enter Book Name" required>

<label>Author</label>
<input type="text" name="author" placeholder="Enter Author Name" required>

<label>Publisher</label>
<input type="text" name="publisher" placeholder="Enter Publisher Name" required>

<label>Quantity</label>
<input type="number" name="quantity" min="1" placeholder="Enter Quantity" required>

<input type="submit" value="➕ Add Book">

</form>
</div>
</div>


<?php include("footer.php"); ?>