<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Login</title>

<link rel="stylesheet" href="style.css">

<style>
body{
    margin:0;
    padding:0;
    font-family:Arial,sans-serif;
    background:#eef2f7;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

</style>

</head>

<body>

<div class="login-box">

<h2>🔐 Admin Login</h2>

<form action="logincheck.php" method="post">

<label>Username</label>
<input type="text" name="username" required>

<label>Password</label>
<input type="password" name="password" required>

<input type="submit" value="Login">

</form>

</div>

</body>
</html>