<?php
include("db.php");
include("header.php");
include("sidebar.php");
?>

<div class="container">

<div class="form-box">

<h2>↩ Return Book</h2>

<form action="searchreturn.php" method="post">

<label>Enter Issue ID</label>

<input type="number"
name="id"
placeholder="Enter Issue ID"
required>

<input type="submit" value="🔍 Search Book">

</form>

</div>

</div>
