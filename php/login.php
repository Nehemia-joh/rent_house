<!doctype html>

<html lang="en"> 

 <head> 

  <meta charset="UTF-8"> 

  <title>CodePen - Animated Login Form using Html &amp; CSS Only</title> 

  <style>
        @import url('../assets/css/style.css');
        @import url('../assets/css/templatemo_style.css');

    </style>
 </head> 

 <body> <!-- partial:index.partial.html --> 
 <div class="contact-form">

    
    <form method="post">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" name="username" id="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" id="password">

        <!-- <button>Log In</button> -->
        <input type="submit" class="mainBtn" id="submit" name="submit" value="Login">
       
    </form>
    </div>
  <?php
    session_start();
    if(isset($_POST['submit'])){
        $link = mysqli_connect("127.0.0.1","root","chance00","house_rent");
        
        

        $username = mysqli_real_escape_string($link, $_POST['username']); //sanitize user input
        $password = mysqli_real_escape_string($link, $_POST['password']);

        if(empty($username) && empty($password)){
            echo "<p style='color:red;'>Please enter your login credentials</p>";
        }else{
            $query = "SELECT * FROM users WHERE username ='$username' AND password = '$password'";
            $result = mysqli_query($link,$query);

            // check if user exists
            if(mysqli_num_rows($result)==1){
                $row = mysqli_fetch_array($result);
                $_SESSION['username'] = $row['username'];
                $_SESSION['type'] = $row['type'];

                // authorization level
                switch($_SESSION['type']){
                	case '1':
                		header("location: admin.php");
                		break;
                	case '2':
                		header("location: tenant.php");
                		break;
                	default:
                		echo "<p style='color:red;'>Invalid role</p>";
                }
            }else {
                echo "<p style='color:red;'>Invalid login credentials</p>";
            }
        }
    }
   
    ?>


 </body>

</html>

    
