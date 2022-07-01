<?php
session_start();
?>
<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Book package</title>
        <link rel="stylesheet" href="styles.css">
</head>
<body style="background-color: #FFFAF0;">
<h1 class="class">PACKAGE DETAILS</h1>
<?php
$ID=$_GET['id'];
$query="select * from package where package_id='$ID'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
?>
<form action="payment.php" method="POST">
<div style="text-align:center;">
<h3>Package ID - <?php echo $row['package_name']; ?></h3>
<h3>Place - <?php echo $row['city']; ?></h3>
<h3>Hotel Name - <?php echo $row['hotel']; ?></h3>
<h3>Maximum number of people allowed - <?php echo $row['Max_people']; ?></h3>
<h3>Number of bed rooms - <?php echo $row['No_of_beds']; ?></h3>
<h3>Address - <?php echo $row['Address']; ?></h3>
<h3>Discription - <?php echo $row['description']; ?></h3>
<h3>Package cost - <?php 
$_SESSION['price']=$row['price'];
echo $row['price']; ?></h3>
<button class="b" style="width:20%;" name="pay">Pay</button>
</div>
</form>
<?php
?>
</body>
</html>
