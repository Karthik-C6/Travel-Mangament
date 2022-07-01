<?php
session_start();
?>
<?php
include 'db.php';
?>
<?php
if(isset($_POST['login'])){
if(isset($_POST['username']) && isset($_POST['password'])){
	$name=$_POST['username'];
	$_SESSION['name']=$name;
	$password=$_POST['password'];
	$sql="select * from admin_details where username='$name' AND password='$password'";
	$result= mysqli_query($conn,$sql);
	$check=mysqli_fetch_array($result);
	if(isset($check)){
		$_SESSION['name']=$check['username'];
		$_SESSION['id']=$check['admin_id'];
		header('Location: Admin page.php');
	}
	else{
		echo "<script>alert('the username or password is incorret please try again'); window.location='Admin Login page.php'</script>";
	}
	}
}
if(isset($_POST['logout'])){
		echo "<script>window.location='Admin Login page.php';</script>";
}
?>