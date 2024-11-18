<head>
    <style>
        @import url('../assets/css/cascade.css');
    </style>
</head>
<body style="background-image: url(back.jpg); background-size:cover; background-position:center; background-repeat:no-repeat;">
You're welcome
    <?php
    session_start();
    //$_SESSION['firstname'];

    echo "<b>".$_SESSION['username']."</b>";
    ?>
<?php
$name=$_SESSION['username'];
$link = mysqli_connect("127.0.0.1","root","chance00","house_rent");
$query1="SELECT * FROM tenants WHERE email='$name'";
$result1=mysqli_query($link,$query1);

echo "<table border='1' align='center'>";

echo "<tr>
        <th>First name</th>
        <th>last name</th>
        <th>email</th>
        <th>contact</th>       
        
    </tr>";
while($row=mysqli_fetch_array($result1)){
    echo "<tr>";
    echo "<td>".$row['firstname']."</td>";
    echo "<td>".$row['lastname']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['contact']."</td>";
    echo "</tr>";
}
echo"</table>";
?>