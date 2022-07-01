<?php
include 'db.php';
?>
<?php
session_start();
$ID=$_GET['id'];
$query="select * from travel_details where travel_id='$ID'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
<title>Book And Pay</title>
<link rel="stylesheet" href="styles.css">
</head>
<body style="background-color: #FFFAF0;">
<h1 class="class">TRAVEL DETAILS</h1>
<form action="payment.php" method="POST">
<div style="text-align:center;">
<h3>Transport Name - <?php echo $row['transportname']; ?></h3>
<h3>Transport Mode - <?php echo $row['mode']; ?></h3>
<h3>Journey Start In - <?php echo $row['start']; ?></h3>
<h3>Destination - <?php echo $row['end']; ?></h3>
<h3> Date- <?php echo $row['date']; ?></h3>
<h3>Time - <?php echo $row['time']; ?></h3>
<h3>Price - <?php 
echo $_SESSION['cost']?></h3>
<button class='b' style="width:20%;" name='travelpay'>Pay</button>
</div>
</form>
</body>
</html>