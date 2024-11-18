<head>
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
    window.onclick=function(event){
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
<!--<div class="dropd">
    <button class="dropb">Button</button>
    <div class="dropcon">
        <a href="#">Item 2</a>
        Name<br>
        <input type="text">
        <a href="#">Item 2</a>
        <a href="#">Item 2</a>
    </div>
</div>-->

<div class="dropd">
    <button class="dropb">Button</button>
    <div class="dropcon">
        <form method="POST" action="">
        Request<br>
        <input type="text" name="request"><br>
        <input type="submit" name="submit1" value="send request">
</form >
        <?php
        $d12=12;
        if(isset($_POST['submit1'])){
            include('db_connect.php');
            $req=$_POST['request'];
            //$user=$_SESSION['username'];
            if(True){
                $query="INSERT INTO request (house_id,request) VALUES ('$d12','$req')";
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