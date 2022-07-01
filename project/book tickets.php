<?php
include 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Book Tickets</title>
</head>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
input[type=date],select{
	width: 100%;
  	padding: 12px 20px;
  	margin: 8px 0;
  	display: inline-block;
 	 border: 1px solid #ccc;
  	border-radius: 4px;
  	box-sizing: border-box;
}
.b{
  width:70%;
  background-color: #4CAF50;
  color: white;
  padding:20px;
  border: none;
  margin: 10px;
  border-radius: 4px;
  text-align:center;
  cursor: pointer;
}

.b:hover {
  background-color: #45a049;
}
div {
  border-radius: 5px;
  margin: 50px 500px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
<div>
<form action="book tickets.php" method="POST">
<label for='start'>Place to start</label>
<input type="text" id="start" name="start" placeholder="place where you start from.....">
<label for='go'>Your destination</label>
<input type="text" id="go" name="destination" placeholder="place that you go...">
<label for="date">Date</label>
<input type="date" id="date" name="date">
<label for="no">No of tickets</label>
    <select id="no" name="number">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="8">7</option>
    </select>
<label for="mode">Mode of traveling</label>
    <select id="mode" name="travel">
      <option value="aeroplane">aeroplane</option>
      <option value="bus">Bus</option>
      <option value="train">Train</option>
    </select>
<input name='search' type="submit" value="search">
</form>
</div>
<?php
if(isset($_POST['search'])){
  if(!empty($_POST['start']) && !empty($_POST['destination']) && !empty($_POST['travel']) && !empty($_POST['travel'])){
      $start=$_POST['start'];
      $end=$_POST['destination'];
      $mode=$_POST['travel'];
      $date=$_POST['date'];
      $number=$_POST['number'];

      $present_date=date("Y-m-d");
        $query="select * from travel_details where start='$start' and end='$end' and mode='$mode' and date>'$present_date'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==0){
          echo "we didn't find any transportaion with you facilities";
        }
        else{
          while($row=mysqli_fetch_array($result)){
            if($row['date']>$present_date){
            ?>
            <table style="width:100%">
            <tr>
              <th>Transport Name</th>
              <th>Mode</th>
              <th>Start</th>
              <th>End</th>
              <th>Date</th>
              <th>Time</th>
              <th>Cost</th>
              <th>No.of tickets</th>
              <th>Total Cost</th>
              <th>Payment</th>
            </tr>
            <tr>
            <td style="text-align:center;"><?php echo $row['transportname']?></td>
            <td style="text-align:center;"><?php echo $row['mode']?></td>
            <td style="text-align:center;"><?php echo $row['start']?></td>
            <td style="text-align:center;"><?php echo $row['end']?></p></td>
            <td style="text-align:center;"><?php echo $row['date']?></td>
            <td style="text-align:center;"><?php echo $row['time']?></td>
            <td style="text-align:center;"><?php echo $row['cost']?></td>
            <td style="text-align:center;"><?php echo $number?></td>
            <?php
            $cost=$row['cost']*$number;
            $_SESSION['cost']=$cost;
            ?>
            <td style="text-align:center;"><?php echo $cost?></td>
            <td style="text-align:center;">
            <a href="bookandpay.php?id=<?php echo $row['travel_id']; ?>"><button class='b' name='bookandpay'>Book & Pay</button></a></td>
          </tr>
          </table>
            <?php
          }
        }
        }
      }
  else{
    echo "all feilds are required";
  }
}
?>
</body>
</html>