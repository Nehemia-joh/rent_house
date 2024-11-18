<head>
    <style>
        @import url('../assets/css/cascade.css');
        @import url('../assets/css/templatemo_style.css');
    </style>
    <style>
        /* Style the dropdown button */
.dropbt{
background-color: #4CAF50;
color: white;
padding: 12px;
font-size: 16px;
border: none;
cursor: pointer;
}
/* Style the dropdown content (hidden by default) */
.dropcon {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}
/* Style the links inside the dropdown */
.dropcon a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
}
/* Change the background color of the dropdown links on hover */
.dropcon a:hover {
background-color: #f1f1f1;
}
/* Show the dropdown menu on hover */
.dropd:hover .dropcon {
display: block;
}
    </style>
</head>
<script>
    /*window.onclick=function(event){
        if(!event.target.matches('.dropb')){
            var dropdowns=document.getElementsByClassName("dropcon");
            for(var i=0; i<dropdowns.length; i++){
                var opendropdown=dropdowns[i];
                if(opendropdown.style.display === "block"){
                    opendropdown.style.display="none";
                }

            }
        }
    }
</script>
</head>
<body style="background-image: url('../assets/images/IMG-20240529-WA0028.jpg'); background-size:cover; background-position:center; background-repeat:no-repeat;">
<?php
session_start();
//$_SESSION['username'];
?>
<!--house one-->
<div id="houses">
<img src="../assets/images/IMG-20240529-WA0032.jpg" width="400" height="200">
<div class="house">
<p>Location:Kikwakwaru<p>
<p>200,000 Tsh</p>
    </div>
<div class="dropd">
    <button class="dropb">Button</button>
    <div class="dropcon contact-form">
        <form name="contactform" id="contactform" method="POST" action="">
        Request<br>
        <input type="text" name="email" placeholder="email" ><br>
        <input type="text" name="request" placeholder="Request" ><br>
        <input type="submit" name="submit1" value="send request">
</form >
        <?php
        $d12=12;
        if(isset($_POST['submit1'])){
            include('db_connect.php');
            $req=$_POST['request'];
            $email=$_POST['email'];
            if(True){
                $query="INSERT INTO request (house_id,email,request) VALUES ('$d12','$email','$req')";
                $result=mysqli_query($link,$query);
                if($result){
                    echo "Request sent";
                }
                else{
                    echo "Data not saved";
                }
            }
        }
        
      ?>
    </div>
</div>
   
<!--house two-->
<img src="../assets/images/IMG-20240529-WA0034.jpg" width="400" height="300">
<div class="house">
<p>Location:Njiro hill<p>
<p>200,000 Tsh</p>
    </div>
<div class="dropd">
    <button class="dropb">Button</button>
    <div class="dropcon">
        <form method="POST" action="">
        Request<br>
        <input type="text" name="email" placeholder="email" ><br>
        <input type="text" name="request" placeholder="Request" ><br>
        <input type="submit" name="submit2" value="send request">
</form >
        <?php
        $d13=13;
        if(isset($_POST['submit2'])){
            include('db_connect.php');
            $req=$_POST['request'];
            $user=$_SESSION['username'];
            if(True){
                $query="INSERT INTO request (house_id,username,request) VALUES ('$d13','$user','$req')";
                $result=mysqli_query($link,$query);
                if($result){
                    echo "Request sent";
                }
                else{
                    echo "Data not saved";
                }
            }
        }
            // if ($d13 > "5") {
            //     echo "The house id FULL";
            // }
        
        
      ?>
    </div>
</div>

<!--house three-->
<img src="../assets/images/IMG-20240529-WA0031.jpg" width="400" height="300">
<div class="house">
<p>Location:Mbauda<p>
<p>200,000 Tsh</p>
    </div>
<div class="dropd">
    <button class="dropb">Button</button>
    <div class="dropcon">
        <form method="POST" action="">
        Request<br>
        <input type="text" name="email" placeholder="email" ><br>
        <input type="text" name="request" placeholder="Request" ><br>
        <input type="submit" name="submit3" value="send request">
</form >
        <?php
        $d14=14;
        if(isset($_POST['submit3'])){
            include('db_connect.php');
            $req=$_POST['request'];
            $user=$_SESSION['username'];
            if(True){
                $query="INSERT INTO request (house_id,username,request) VALUES ('$d14','$user','$req')";
                $result=mysqli_query($link,$query);
                if($result){
                    echo "Request sent";
                }
                else{
                    echo "Data not saved";
                }
            }
        }
        
      ?>
    </div>
</div>

<!--house four-->
<img src="../assets/images/IMG-20240529-WA0030.jpg" width="400" height="300">
<div class="house">
<p>Location:Morombo<p>
    <p>100,000 Tsh</p>
    <p>Status:</p>
    </div>
<div class="dropd">
    <button class="dropb">Button</button>
    <div class="dropcon">
        <form method="POST" action="">
        Request<br>
        <input type="text" name="email" placeholder="email" ><br>
        <input type="text" name="request" placeholder="Request" ><br>
        <input type="submit" name="submit4" value="send request">
</form >
        <?php
        $d15=15;
        if(isset($_POST['submit4'])){
            include('db_connect.php');
            $req=$_POST['request'];
            $user=$_SESSION['username'];
            if(True){
                $query="INSERT INTO request (house_id,username,request) VALUES ('$d15','$user','$req')";
                $result=mysqli_query($link,$query);
                if($result){
                    echo "Request sent";
                }
                else{
                    echo "Data not saved";
                }
            }
        }
        
      ?>
    </div>
</div>
</div>