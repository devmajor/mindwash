<?php

if(isset($_POST["submit"])){
	// $email = $_POST['email'];


echo $to = $_POST["email"];
$from = "victorabayomi@gmail.com";
$subject = "MindWash Coming Soon!";
$message = "Thank you for subscribing, You will be notified when our app is launched";
// $message = "
// <html>
// <head>
// <title>HTML email</title>
// </head>
// <body>
// <p>This email contains HTML Tags!</p>
// <table>
// <tr>
// <th>Firstname</th>
// <th>Lastname</th>
// </tr>
// <tr>
// <td>John</td>
// <td>Doe</td>
// </tr>
// </table>
// </body>
// </html>
// ";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);

// $separator = md5(time());

// // carriage return type (we use a PHP end of line constant)
// $eol = PHP_EOL;

// // attachment name
// // $filename = "";

// //$pdfdoc is PDF generated by FPDF
// // $attachment = chunk_split(base64_encode(file_get_contents($filename))); 

// // main header
// $headers  = "From:".$from.$eol;
// $headers .= "MIME-Version: 1.0".$eol; 
// $headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";

// // no more headers after this, we start the body! //

// $body = "--".$separator.$eol;
// $body .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
// $body .= $bdy.$eol;

// // message
// $body .= "--".$separator.$eol;
// $body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
// $body .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
// // $body .= $message.$eol;

// // attachment
// $body .= "--".$separator.$eol;
// // $body .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
// $body .= "Content-Transfer-Encoding: base64".$eol;
// $body .= "Content-Disposition: attachment".$eol.$eol;
// // $body .= $attachment.$eol;
// $body .= "--".$separator."--";

// // send message
// if (mail($to, $subject, $body, $headers)) {
//     echo "mail send ... OK";
// } else {
//     echo "mail send ... ERROR";
// }

// "-f crudanhq@crudan.org"

}else{
	echo "NO DATA RECEIVED";
}


?>