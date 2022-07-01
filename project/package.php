<?php
session_start();
?>
<?php
include 'db.php';
?>
<?php
if(isset($_POST['create'])){
    if(!empty($_POST['ID']) && !empty($_POST['city']) && !empty($_POST['days']) && !empty($_POST['hotel']) && !empty($_POST['beds']) && !empty($_POST['max']) && !empty($_POST['address']) && !empty($_POST['description']) && !empty($_POST['cost'])){
        $id=$_POST['ID'];
        $city=$_POST['city'];
        $days=$_POST['days'];
        $hotel=$_POST['hotel'];
        $beds=$_POST['beds'];
        $max=$_POST['max'];
        $address=$_POST['address'];
        $des=$_POST['description'];
        $image=$_FILES['image']['name'];
        $target="images/".basename($_FILES['image']['name']);
        $cost=$_POST['cost'];
        $adminid=$_SESSION['id'];
        $query="insert into package(package_name,city,no_of_days,hotel,Max_people,No_of_beds,Address,description,image,price,user_id) 
        values('$id','$city','$days','$hotel','$max','$beds','$address','$des','$image','$cost','$adminid')";
        $run= mysqli_query($conn,$query) or die(mysqli_error($conn)) ;
        if ($run && move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            echo "<script>alert('package created sucessfully'); window.location='Admin page.php'</script>";
        }
        else{ 
            echo "image isn't uploaded";
        } 
    }
    else{
        echo "<script>alert('all fields are required'); window.location='Create package.html'</script>";
    }
}
?>