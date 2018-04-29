<?php
if( !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['message']) ) {

	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];
	
	$to = "info@costadvantage.net, $email";
	$subject = 'Contact US';
	$message = "Hello Your message is received by us:" . 
	"\r\n" ."Name: $name " . 
	"\r\n" ."Email: $email " .
	"\r\n" ."Phone: $phone " .
	"\r\n" ."Message: $message " .
	"\r\n" ."You may expect a reply from us withing 24-48  hrs." .
	"\r\n" . "Thank You";
$headers = 'From: info@costadvantage.net' . "\r\n" .
	'Reply-To: info@costadvantage.net' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

$mail_log = mail($to, $subject, $message, $headers);

echo $message;
die('1122');

//header('location:../contactus.php?success');

} else {
	error_log('nai chal raho');
}

// if($name =='' || $email =='' ){
//     header("location:../contactus.php?error1");
// }else{
// $to      = "info@costadvantage.net,$email";
// $subject = 'Contact US';
// $message = "Hello Your message is received by us:
// <br/> Name: $name <br/>
// <br/> Email: $email <br/>
// <br/> Phone: $phone <br/>
// <br/> Message: $message <br/>
// You may expect a reply from us withing 24-48  hrs.<br/><br/>
// Thank You<br/>
// ";
// $headers = 'From: contact@ecostadvantage.com' . "\r\n" .
//     'Reply-To: contact@ecostadvantage.com' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();

// mail($to, $subject, $message, $headers);
    
//     header('location:../contactus.php?success');
// }

?>