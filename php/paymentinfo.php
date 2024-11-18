<head>
    <style>
        @import url('../assets/css/cascade.css');
    </style>
</head>
<body style="background-image: url(back.jpg); background-size:cover; background-position:center; background-repeat:no-repeat;">
You're welcome
    <?php
    session_start();
    $_SESSION['firstname'];

    echo "<b>".$_SESSION['username']."</b>";
    ?>
<?php
$nam=$_SESSION['firstname'];
include('db_connect.php');
$query="select * from payments1 where name='$nam'";
$result=mysqli_query($link,$query);

echo "<table border='1' align='center'>";

echo "<tr>
        <th>Name</th>
        <th>amount</th>
        <!--<th>TYPE_OF_GOOD</th>
        <th>TOTAL_AMOUNT</th>
        <th>DATE</th>
        <th>COURSE NAME</th>
        <th colspan='2'>ACTION</th>-->        
        
    </tr>";
while($row=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['amount']."</td>";
    /*echo "<td>".$row['TYPE_OF_GOOD']."</td>";
    echo "<td>".$row['TOTAL_AMOUNT']."</td>";
    echo "<td>".$row['DATE']."</td>";
    //echo "<td>".$row['course']."</td>";
    //CREATE AN ID VARIABLE THAT TRANSFER DATA 
    echo "<td><a href='deletepurchases.php?id=".$row['SNUMBER']."'>Delete</a></td>";
    echo "<td><a href='updatepurchases.php?id=".$row['SNUMBER']."'>Update</a></td>";*/
    echo "</tr>";
}
echo"</table>";
?>

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  color: black;
}

tr:hover {background-color: coral;}
</style>