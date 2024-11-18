<head>
    <style>
        @import url('../assets/css/cascade.css');
    </style>
</head>
<body style="background-color:pink; opacity:50; width:fit-content; height:fit-content;" >
    <?php
    session_start();
    echo "You're welcome";
    echo "<b>".$_SESSION['username']."</b>";
    $query_rece="select * from tenants";
$result_rece=mysqli_query($link,$query_rece);
    ?>
<form action="" method="POST">
    Announcement<br>
    <textarea name="announce" placeholder="type the announcement"></textarea><br>
    <select name="receiver">
        <?php
        while($row_rece=mysqli_fetch_array($result_rece)){
    echo "<option value=".$row_rece['email'].">".$row_rece['firstname']."  ".$row_rece['lastname']."</option>";
        }
    ?>
</select>
    <input type="submit" name="submit_ann" value="Send the announcement">

</form>
<?php

if(isset($_POST['submit_ann'])){

    include('db_connect.php');
    $username=$_SESSION['username'];
    $announce = $_POST['announce'];
    $m=date("Y-m-d");
    $receiver=$_POST['receiver'];
    //$amount=$_POST['amount'];
    //$wid=$_POST['usern'];
    
        $query_ann="INSERT INTO announcement (username,announcement,date,receiver) VALUES ('$username','$announce','$m','$receiver')";
        $result_ann=mysqli_query($link,$query_ann);
        if($result_ann){
            echo "Announcement sent";
        }
        else{
            echo "Data not saved";
        }

    }
    mysqli_close($link);

?>