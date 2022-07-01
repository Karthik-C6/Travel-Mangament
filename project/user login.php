<!DOCTYPE html>
<html>
<?php
session_start();
?>
<?php
include 'db.php';
?>
<?php
if(isset($_POST['login'])){
	$name=$_POST['username'];
	$password=$_POST['password'];
	$sql="select * from user_details where username='$name' AND password='$password'";
	$result= mysqli_query($conn,$sql);
	$check=mysqli_fetch_array($result);
	if($check['username']==$name && $check['password']==$password){
		$_SESSION['userid']=$check['user_id'];
		echo "<script>window.location='User page.html';</script>";
	}
	else{
		echo "<script>alert('your username or password is incorrect'); window.location='User Login Page.php';</script>";
	}
	}	
if(isset($_POST['logout'])){
		echo "<script>window.location='User Login page.php';</script>";
}
?>
</html>