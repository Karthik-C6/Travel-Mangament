<?php
session_start();

?>
<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Payment Page</title>
        <link rel="stylesheet" href="styles.css">
    </head>
<body>
    <h1 class="class">Payment</h1>
<form action="payment.php" method="POST">
<div class="look">
<label for="card">Card Number</label>
<input type="text" id="card" name="cardno" placeholder="Enter your card number">
<label for="ex">Card Expiry date(MMYY)</label>
<input type="text" id="ex" name="expiry" placeholder="">
<label for="cvv">CVV</label>
<input type="password" id="cvv" name="cvv">
<div style="text-align:center;">
<?php
if(isset($_POST['pay'])){
?>
<button class="b" type="submit" style="width: 35%;" name="packagepay">Pay <?php echo $_SESSION['price'] ?></button>
<?php 
}
if(isset($_POST['travelpay'])){
?>
<button class="b" type="submit" style="width: 35%;" name="tpay">Pay <?php echo $_SESSION['cost'] ?></button>
<?php
}
?>
<?php
if(isset($_POST['packagepay'])){
    if(!empty($_POST['cardno']) && !empty($_POST['expiry']) && !empty($_POST['cvv'])){
        echo "<script>alert('Your package booked'); window.location='user page.html';</script>";
    }
    else{
        echo "All feilds are rquired";
    }
}
if(isset($_POST['tpay'])){
    if(!empty($_POST['cardno']) && !empty($_POST['expiry']) && !empty($_POST['cvv'])){
        echo "<script>alert('Your tickets are booked'); window.location='user page.html';</script>";
    }
    else{
        echo "All feilds are rquired";
    }
}
?>
</div>
</div>
</form>
</body>
</html>