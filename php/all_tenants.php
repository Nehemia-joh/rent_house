<head>
<body style="background-color:pink; opacity:50; width:fit-content; height:fit-content;" >
<center><?php
    session_start();

    echo "<b style=\"color:white;\">".$_SESSION['username']."</b>";
    ?></center>
<?php
include('db_connect.php');
$query="select * from tenants";
$result=mysqli_query($link,$query);
echo "<table border='1' align='center' style=\"color:white;\">";
echo "<tr>
        <th>S/N</th>
        <th>FIRST NAME</th>
        <th>SECOND NAME</th>
        <th>LAST NAME</th>
        <th>EMAIL</th>
        <th>CONTACT</th>
        <th>HOUSE_ID</th>
        <th>STATUS</th>
        <th>DATE</th>
        <!--<th>COURSE NAME</th>
        <th colspan='2'>ACTION</th>-->        
        
    </tr>";
while($row=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['firstname']."</td>";
    echo "<td>".$row['secondname']."</td>";
    echo "<td>".$row['lastname']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['contact']."</td>";
    echo "<td>".$row['house_id']."</td>";
    echo "<td>".$row['status']."</td>";
    //echo "<td>".$row['TOTAL_AMOUNT']."</td>";
    echo "<td>".$row['date_in']."</td>";
    //CREATE AN ID VARIABLE THAT TRANSFER DATA
    $_SESSION['firstname'] = $row['firstname'];
    echo "<td><a href='payment.php?id=".$row['id']."'>Add payment</a></td>";
    echo "<td><a href='paymentinfo.php?id=".$row['id']."'>Tenants payment</a></td>";
    echo "<td><a href='delete_tenant.php?id=".$row['id']."'>Delete</a></td>";
    echo "<td><a href='update_tenant.php?id=".$row['id']."'>Update</a></td>";
    echo "</tr>";
}
echo"</table>";
?>