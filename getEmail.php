<?php

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$connect = mysqli_connect("localhost","id14333699_mindwashadmin","MINDwash123!","id14333699_mindwash") ;



if(isset($_POST["submit"])){
	

$to = $_POST["email"];
$from = "info@mindwash.com";
$subject = "MindWash Coming Soon!";

$message = "
<html>
    <body style='background:#4285F4; color:#FFFFFF; padding: 2em; font-size:1.5em'>
    <center>
        <h1>MindWash</h1>
    </center>
    <center>
        <h4>Thank you for subscribing, You will be notified when our app is launched</h4> <br>
        
    </center>
    </body>
    </html>
    ";

    // Always set content-type when sending HTML email
$headers = 'From: MindWash info@mindwash.com ' . "\r\n" .
    'Reply-To: MindWash info@mindwash.com' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=UTF-8\r\n';


if (mail($to, $subject, $message, $headers)) {
    echo "<html><body style='background:#4285F4; padding:10em; color:#FFFFFF; font-family:DM Sans'><center> <h1>Thank you for your interest! </h1>
        <a href='index.php' style='color:white; text-decoration:none; font-size:1.3em'><< Go Back </a>
    </center></body></html>";
    
    
    $sql = "INSERT INTO subscribers (`email`)VALUES('$to')";
    $run_sql = mysqli_query($connect, $sql);
    
    if($run_sql){
       
    }else{
        
    }
   
} else {
    echo "<html><body style='background:#4285F4; padding:10em; color:#FFFFFF; font-family:DM Sans'> 
    <center><h1>Something went wrong, try again! </h1></center>
    </body></html>";
}



}else{
	echo "NO DATA RECEIVED";
}


?>