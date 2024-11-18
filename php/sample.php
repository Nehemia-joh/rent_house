<?php
require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$id=$_GET['id'];
$link = mysqli_connect("127.0.0.1","root","chance00","house_rent");
$query1="SELECT * FROM request WHERE rid='$id'";
$result1=mysqli_query($link,$query1);
while($row=mysqli_fetch_array($result1)){
  $email=$row['email'];
}

    $mail = new PHPMailer(true);

  
        //Server settings
        $mail->SMTPDebug = 2;                    
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'nmushi249@gmail.com';   //sender email                  
        $mail->Password   = 'qefa hlmx lklk maar';                               
        $mail->SMTPSecure = 'tls';            
        $mail->Port       = 587;                                    

        //Recipients
        $mail->setFrom('nmushi249@gmail.com', 'Humphrey'); //sender email
        $mail->addAddress($email);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = 'House Request Accepted';
        $email_template = "Follow the Procedures below to make payments";

        $mail->Body = $email_template;
        $mail->send();
        echo 'Message has been sent';
        header('location:admin.php');
    


