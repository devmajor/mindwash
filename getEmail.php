<?php
ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    
if(isset($_POST["submit"])){
	// $email = $_POST['email'];


// echo $to = $_POST["email"];
// $from = "victorabayomi@gmail.com";
// $subject = "MindWash Coming Soon!";
// $bdy = "Thank you for subscribing, You will be notified when our app is launched";

$to      = 'victor.mrcertified@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();



if (mail($to, $subject, $message, $headers)) {
    echo "mail send ... OK";
} else {
    echo "mail send ... ERROR";
}


}else{
	echo "NO DATA RECEIVED";
}


?>