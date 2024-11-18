<?php
include('db_connect.php');

//super global array
$id=$_GET['id'];
//sql query for deleteing a row
$query="DELETE from tenants WHERE id = '$id'";
$result=mysqli_query($link,$query);
if($result){
    header("location:admin.php");
}
