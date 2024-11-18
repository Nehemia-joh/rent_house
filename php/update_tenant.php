<?php
session_start();
?>
<?php
include('db_connect.php');
$id=$_GET['id'];
//sql query for row needed to be updated
$query="SELECT * FROM tenants WHERE id ='$id'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        @import url('../assets/css/cascade.css');
        @import url('../assets/css/style.css');
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body style="background-image: url(back.jpg); background-size:cover; background-position:center; background-repeat:no-repeat;">
You're welcome
    <?php

    echo "<b>".$_SESSION['username']."</b>";
    ?>
<form action="" method="post" >
    First name<br>
    <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" > <br>
    Second name<br>
    <input type="text" name="secondname" value="<?php echo $row['secondname']; ?>" > <br>
    Last name<br>
    <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" > <br>
    Email<br>
    <input type="text" name="email" value="<?php echo $row['email']; ?>" > <br>
    Telephon Number<br>
    <input type="text" name="phonenumber" placeholder="contact"value="<?php echo $row['contact']; ?>"><br>
    House_id<br>
    <input type="text" name="house_id" placeholder="house_id" value="<?php echo $row['email']; ?>"><br>
    <!--add the user rol<br>
    <input type="text" name="roles" value="<?php //echo $row['ROLES']; ?>" ><br>-->
    <input type="submit" name="submit" value="Make changes"><br>
</form>
<?php
if(isset($_POST['submit'])){

    include('db_connect.php');
    $fn = $_POST['firstname'];
    $sn=$_POST['secondname'];
    $ln=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phonenumber'];
    $house_id=$_POST['house_id'];
    //$status=$_POST['status'];
    //$m=date("Y-m-d");
    //$roles= $_POST['roles'];

    if(True/*$username != "" && $pass != "" && $roles != ""*/){
        $query="UPDATE tenants SET firstname='$fn',secondname='$sn',lastname='$ln',email='$email',contact='$phone',house_id='$house_id' where id='$id'";
        $result=mysqli_query($link,$query);
        if($result){
            echo "Data updated";
            header("location:all_tenants.php");
        }
        else{
            echo "data not saved";
        }

    }
    mysqli_close($link);
}
?>
<html>