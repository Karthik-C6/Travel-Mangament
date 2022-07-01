<?php
include 'db.php';
?>
<html>
<body>
<?php
if(isset($_POST['submit'])){
	if(!empty($_POST['username']) && !empty($_POST['phone']) && !empty($_POST['mail']) && !empty($_POST['password'])){
		$name=$_POST['username'];
		$phonenumber=$_POST['phone'];
		$password=$_POST['password'];
		$mail=$_POST['mail'];
		$check="select * from admin_details where username='$name'";
		$phonecheck="select * from admin_details where phone='$phonenumber'";
		$mailcheck="select * from admin_details where mail='$mail'";
		$a=mysqli_query($conn,$check);
		$b=mysqli_query($conn,$phonecheck);
		$c=mysqli_query($conn,$mailcheck);
		if(mysqli_num_rows($a)>0){
			echo "<script>alert('sorry the username is already taken'); window.location='create account.html';</script>";
		}
		else if(mysqli_num_rows($b)>0){
			echo "<script>alert('sorry the phone number is already taken'); window.location='create account.html';</script>";
		}
		else if(mysqli_num_rows($c)>0){
			echo "<script>alert('sorry the mail is already taken'); window.location='create account.html';</script>";	
		}
		else{
		$query="insert into admin_details(username,phone,mail,password) values('$name','$phonenumber','$mail' ,'$password')";
		$run= mysqli_query($conn,$query) or die(mysqli_error($conn)) ;
		if($run){
			echo "<script>alert('your account has been created sucessfully'); window.location='Admin Login page.php';</script>";	
		}
		else{
			echo "Your Account hasn't created due to some technical problem";
		}
		}
	}
	else{
		echo "<script>alert('all feilds are required'); window.location='create account.html';</script>";
	}
}
?>
</body>
</html>