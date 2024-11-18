
<head>
  <title>Bootstrap Navigation Bar</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <style>
        @import url('cascade.css');
    </style>
</head>
<!-- <body style="background-color:pink; opacity:50; width:fit-content; height:fit-content;" > -->

You're welcome
    <?php
    session_start();

    echo "<b>".$_SESSION['username']."</b>";
    ?>
<?php
include('db_connect.php');
$query_see="select * from announcement";
$result_see=mysqli_query($link,$query_see);

echo "<table border='0' align='center'>";

echo "<tr style='background-color:aqua;'>
        <th>Sender</th>
        <th>Announcement</th>
        <th>Date posted</th>
        <th>Receiver</th>
             
        
    </tr>";
while($row_see=mysqli_fetch_array($result_see)){
    echo "<tr>";
    echo "<td style='background-color:aqua;'>".$row_see['username']."</td>";
    echo "<td>".$row_see['announcement']."</td>";
    echo "<td>".$row_see['date']."</td>";
    echo "<td>".$row_see['receiver']."</td>";
    echo "</tr>";
}
echo"</table>";
?>
