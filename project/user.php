<?php
include 'db.php';
?>
<?php
if(isset($_POST['submit'])){
	if(!empty($_POST['username']) && !empty($_POST['phone']) && !empty($_POST['mail']) && !empty($_POST['password'])){
		$name=$_POST['username'];
		$phonenumber=$_POST['phone'];
		$email=$_POST['mail'];
		$password=$_POST['password'];
		$check="select * from user_details where username='$name'";
		$phonecheck="select * from user_details where phone='$phonenumber'";
		$emailcheck="select * from user_details where email='$email'";
		$a=mysqli_query($conn,$check);
		$b=mysqli_query($conn,$phonecheck);
		$c=mysqli_query($conn,$emailcheck);
		if(mysqli_num_rows($a)>0){
			echo "<script>alert('Sorry the username is already taken'); window.location='User create account.html';</script>";
		}
		else if(mysqli_num_rows($b)>0){
			echo "<script>alert('Sorry the phone number is already taken'); window.location='User create account.html';</script>";
		}
		else if(mysqli_num_rows($c)>0){
			echo "<script>alert('Sorry the mail is already taken'); window.location='User create account.html';</script>";
		}
		else{
		$query="insert into user_details(username, phone, email, password) values('$name', '$phonenumber','$email','$password')";
		$run= mysqli_query($conn,$query) or die(mysqli_error($conn)) ;
		if($run){
			echo "<script>alert('your account has been created sucessfully'); window.location='User Login Page.php';</script>";
		}
		else{
			echo "Your Account hasn't created  due to some technical problem";
		}
		}
	}
	else{
		echo "<script>alert('all fields are required'); window.location='User create account.html';</script>";
	}
}
?>