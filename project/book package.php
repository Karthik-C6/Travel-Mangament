<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Book Package</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
.car{
    text-align:center;
    border-radius:5px;
    
    padding: 20px;
}
.order{
    float: left;
    width: 30%;
    padding : 15px;
}
</style>
<body style="background-color: #FFFAF0;">
<div class='look'>
<form action='book package.php' method='post'>
<input type="text" style="width:60%" name="place" placeholder="Search the place to go..">
<button class='b' style="width:30%;" type="submit" name='search'>Search</button>
</form>
</div>
<?php
if(isset($_POST['search'])){
if(!empty($_POST['place'])){
    $place=$_POST['place'];
    $query="select * from package where city='$place'";
                $result=mysqli_query($conn,$query);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_array($result)){
                        ?>
                        <div class="order">
                        <div class="car">
                        <img src='images/<?php echo $row['image']; ?>' width='270' height='200' >
                            <p style='text-align:center'><?php echo $row['city']; ?></p>
                            <p style='text-align:center'>Package Cost - <?php echo $row['price']; ?></p>
                            <a href="pay.php?id=<?php echo $row['package_name']; ?>">
                            <button class='b' name='book'>Book Package</button>
                    </a> 
                    </div>
                    </div>
                        <?php
                    }
                }
                else{
                    echo "There was no package with the place";
                }
}
}
else{
    $query="select * from package";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){
        ?>
        <div class="order">
            <div class="car">
        <img src='images/<?php echo $row['image']; ?>' width='270' height='200' >
            <p style='text-align:center'><?php echo $row['city']; ?></p>
            <p style='text-align:center'>Package Cost - <?php echo $row['price']; ?></p>
            <a href="pay.php?id=<?php echo $row['package_id']; ?>">
            <button class='b' style="width:60%;" name='book' method='POST'>Book Package</button>
            </a>
    </div>
    </div>
        <?php
    }    
}
?>
</body>
</html>