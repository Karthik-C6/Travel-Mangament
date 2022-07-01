<?php
session_start();
?>
<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head><title>Admin Page</title>
<link rel="stylesheet" href="styles.css">
</head>
<body style="background-color: #FFFAF0;">
    <h1 class="class">ADMIN PAGE</h1>
<div class="look">
    <button class="b" style="width: 100%;" onclick="fun1()">Create New Package</button>
    <button class="b" style="width: 100%;" onclick="fun2()">My Packages</button>
    <form action="login.php" method="POST"><button class="b" style="width: 100%;" type="submit" name="logout">Logout</button></form>
    
</div>
<script>
    function fun1(){
        window.location="Create package.html";
    }
    function fun2(){
      window.location="My packages.php";
    }
</script>
</body>
</html>