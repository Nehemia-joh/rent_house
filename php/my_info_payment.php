<head>
    <style>
        @import url('../assets/css/cascade.css');
    </style>
</head>
<body style="background-color:pink; opacity:50; width:fit-content; height:fit-content;" >
You're welcome
    <?php
    session_start();
    //$_SESSION['firstname'];

    echo "<b>".$_SESSION['username']."</b>";
    ?>
<?php
$nam=$_SESSION['username'];
include('db_connect.php');
$query="select * from payments1 where name='$nam'";
$result=mysqli_query($link,$query);

echo "<table border='1' align='center'>";

echo "<tr>
        <th>Name</th>
        <th>amount</th>
        <th>time(months)</th>
        <th>Date from</th>
        <th>Date to</th>
        <!--<th>COURSE NAME</th>
        <th colspan='2'>ACTION</th>-->        
        
    </tr>";
while($row=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['amount']."</td>";
    echo "<td>".$row['timeframe']."</td>";
    echo "<td>".$row['date_from']."</td>";
    echo "<td>".$row['date_to']."</td>";
    //echo "<td>".$row['course']."</td>";
    //CREATE AN ID VARIABLE THAT TRANSFER DATA 
    //echo "<td><a href='deletepurchases.php?id=".$row['SNUMBER']."'>Delete</a></td>";
    //echo "<td><a href='updatepurchases.php?id=".$row['SNUMBER']."'>Update</a></td>";
    echo "</tr>";
}
echo"</table>";
?>