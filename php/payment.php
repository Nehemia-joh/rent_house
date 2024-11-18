<head>
    <style>
        @import url('../assets/css/cascade.css');
        @import url('../assets/css/style.css');
    </style>
</head>
<body style="background-image: url(back.jpg); background-size:cover; background-position:center; background-repeat:no-repeat;">
Your are welcome
    <?php
    session_start();
    $_SESSION['firstname'];
    echo "<b>".$_SESSION['username']."</b>";
    ?>
<form action="" method="POST"><b>
    <!--House type<br></b>
    <input type="radio" name="status" value="Single room"/>single room<br>
    <input type="radio" name="status" value="Self contained"/>self contained<br>
    <input type="radio" name="status" value="Family house"/>family house<br>-->
    Amount <br>

        <select name="Amount">
            <option value="50000">Single room 50,000/=
            <option value="100000">Self contained room 100,000/=
            <option value="200000">Family house 200,000/=
</select><br>
Time (in months)<br>
<input type="number" name="time" placeholder="Time in months"><br>
<input type="date" name="datefrom"><br>
<input type="date" name="dateto"><br>
    <input type="submit" name="submit" value="save payment"><br>

</form>
<?php
if(isset($_POST['submit'])){

    include('db_connect.php');
    //$wid=$_SESSION['username'];
    $amount1=$_POST['Amount'];
    $time=$_POST['time'];
    $datef=$_POST['datefrom'];
    $datet=$_POST['dateto'];

    $amount=$amount1*$time;
    //$m=date("Y-m-d");
    //$hid=$_SESSION['hid1'];
    
{
        $w=$_SESSION['firstname'];
        $query="INSERT INTO payments1 (name,amount,timeframe,date_from,date_to) VALUES ('$w','$amount','$time','$datef','$datet')";
        //$query1="INSERT INTO tenants (house_id) VALUES ('$hid')";
        $result=mysqli_query($link,$query);
        //$result1=mysqli_query($link,$query1);
        if($result){
            echo "data saved";
            header('location:admin.php');
        }
        else{
            echo "data not saved";
        }

    }
    mysqli_close($link);
}
?>
