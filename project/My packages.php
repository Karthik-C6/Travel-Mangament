<?php
session_start();
?>
<?php
include 'db.php';
?>
<!DOCTYPE html> 
<html>
    <head>
        <title>MY Previous Packages</title>
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
        <h1 class="class">MY PACKAGES</h1>
        <?php
            $id=$_SESSION['id'];
            $query="select * from package where user_id='$id'";
            $result=mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result)){
                ?>
                <div class="order">
                        <div class="car">
                <img src='images/<?php echo $row['image']; ?>' width='270' height='200'>
                    <p style='text-align:center'><?php echo $row['city']; ?></p>
                    <p style='text-align:center'>Package Cost - <?php echo $row['price']; ?></p>
                    <a href="View package.php?id=<?php echo $row['package_id']; ?>">
                    <button class='b' style="width:90%;">View Package</button>
                </a>
            </div>
                </div>
                <?php
            }
        }
        else{
            echo "No packages ";
        }
        ?>
    </body>
</html>