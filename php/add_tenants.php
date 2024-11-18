<head>
    <style>
        @import url('../assets/css/templatemo_style.css');
        @import url('../assets/css/cascade.css');
        /* @import url('../assets/css/style.css'); */
        
    </style>
</head>
<body style="background-image: url(back.jpg); background-size:cover; background-position:center; background-repeat:no-repeat;">
Your are welcome
    <?php
    session_start();

    echo "<b>".$_SESSION['username']."</b>";
    ?>

<!-- <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post">
        <h3>Login Here</h3>
        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" name="username1" id="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" id="password">

        <label for="firstname">First Name</label>
        <input type="text" placeholder="First Name" name="firstname" id="firstname">

        <label for="secondname">Second Name</label>
        <input type="text" placeholder="Second Name" name="secondname" id="secondname">

        <label for="lastname">Last Name</label>
        <input type="text" placeholder="Last Name" name="lastname" id="lastname">

        <label for="email">Email</label>
        <input type="text" placeholder="Email" name="email" id="email">

        <label for="phonenumber">Phone Number</label>
        <input type="tel" placeholder="Phone Number" name="phonenumber" id="phonenumber">

        <label for="house_id">House ID</label>
        <input type="text" placeholder="House ID" name="house_id" id="house_id">

        <label for="status">Status</label>
        <input type="radio" name="status" value="1"/>single room<br>
        <input type="radio" name="status" value="2"/>self contained<br>
        <input type="radio" name="status" value="3"/>family house<br>

        <button>Log In</button> 
        <input type="submit" name="submit" value="Add Tenant">
       
    </form> -->

<div class="contact-form">
    <form name="contactform" id="contactform" method="post">
        <p>
        <input type="text" placeholder="Email or Phone" name="username1" id="username">
        </p>
        <p>
        <input type="password" placeholder="Password" name="password" id="password">
        </p>
        <p>
        <input type="text" placeholder="First Name" name="firstname" id="firstname">
        </p>
        <p>
        <input type="text" placeholder="Second Name" name="secondname" id="secondname">
        </p>
        <p>
        <input type="text" placeholder="Last Name" name="lastname" id="lastname">
        </p>
        <p>
        <input type="text" placeholder="Email" name="email" id="email">
        </p>
        <p>
        <input type="tel" placeholder="Phone Number" name="phonenumber" id="phonenumber">
        </p>
        <p>
        <input type="text" placeholder="House ID" name="house_id" id="house_id">
</p>
        <p>
        <label for="status">Status</label>
        <input type="radio" name="status" value="1"/>single room<br>
        <input type="radio" name="status" value="2"/>self contained<br>
        <input type="radio" name="status" value="3"/>family house<br>
</p>

        <input type="submit" class="mainBtn" id="submit" name="submit" value="Add Tenant">
    </form>
</div>
<?php
if(isset($_POST['submit'])){
    $link = mysqli_connect("127.0.0.1","root","chance00","house_rent");
    //$wid=$_SESSION['username'];
    $fn = $_POST['firstname'];
    $sn=$_POST['secondname'];
    $ln=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phonenumber'];
    $house_id=$_POST['house_id'];
    $status=$_POST['status'];
    $m=date("Y-m-d");
    $username1=$_POST['username1'];
    $password=$_POST['password'];
    
        //$wid=$_SESSION['username'];
        $query="INSERT INTO tenants (firstname,middlename,lastname,email,contact,house_id,status,date_in) VALUES ('$fn','$sn','$ln','$email','$phone','$house_id','$status','$m')";
        $query1="INSERT INTO users (username,password,type) VALUES ('$username1','$password',2)";
        $result=mysqli_query($link,$query);
        $result1=mysqli_query($link,$query1);
        if($result){
            echo "Tenant Added";
        }
        else{
            echo "data not saved";
        }
    }
?>
