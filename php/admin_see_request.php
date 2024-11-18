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
$query="select * from request";
$result=mysqli_query($link,$query);

echo "<table border='1' align='center' style=\"color:white;\">";

echo "<tr>
        <th>Name of requester</th>
        <th>request</th>
        <th>House request</th>
        <!--<th>Date from</th>
        <th>Date to</th>
        <th>COURSE NAME</th>
        <th colspan='2'>ACTION</th>-->        
        
    </tr>";
while($row=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['request']."</td>";
    echo "<td>".$row['house_id']."</td>";


    echo "<td><a href='sample.php?id=".$row['rid']."'>Accept Request</a></td>";
    echo "<td><a href='sample_decline.php?id=".$row['rid']."'>Decline Request</a></td>";
    echo "</tr>";
}
echo"</table>";
?>