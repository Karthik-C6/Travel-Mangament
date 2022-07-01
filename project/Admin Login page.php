<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="styles.css">
</head>
<body style="background-color: #FFFAF0;">
	<h1 class="class">ADMIN LOGIN PAGE</h1>
<div class="look">
	<form action="login.php" method="post">
	<label for="uname">User Name</label>
	<input type="text" id="uname" name="username" placeholder="Your name...">
	<label for="pwd">Password</Label>
	<input type="password" id="pwd" name="password" placeholder="Your password...">
	<a href="Admin page.html">
	<button class="b" style="width: 40%;" type ="submit" name="login">Login</button>
	</a>
	</form>
</div>
<h2 style="text-align:center;">If you don't have any account please create an account</h2>
<button class="b" style="margin:50px 600px;width:15%;" onclick="f2()">Create Account</button>
<script>
function f2(){
	window.location="create account.html";
}
</script>
</body>
</html>