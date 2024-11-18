<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add users</title>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
<div class="waper">
  <div class="head">Add Users </div>
  
  <form method="post" action="">
    <div class="foc">
      <input type="text" class="form-control" name="username" placeholder="Username">
      </div>
      <div class="foc">
       <input type="password" class="form-control" name="password"  placeholder="Password" autocomplete="off" >
      </div>
      <div class="foc">
      <select name="role" class="form-control">
  <option value="1">Admin</option>
  <option value="2">Staff</option>
</select>
      </div>
      <div class="foc" >
                <input type="submit" name="submit" class="btn btn-block" value="adduser">
            </div>
  </form>
  
</div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    include "db_connect.php"; //connect to database
    $username =$_POST['username']; //sanitize user input
    $password =$_POST['password'];
    $role = $_POST['role'];

        $query = "INSERT INTO users (username,password,type) VALUES ('$username','$password','$role')";
        $result = mysqli_query($link,$query);
        if($result){
            echo "Saved";
        }

        // check if user exists
        
            }

?>
