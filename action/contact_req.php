<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

if($name =='' || $email =='' ){
    header("location:../contactus.php?error1");
}else{
$to      = "info@costadvantage.net,$email";
$subject = 'Contact US';
$message = "Hello Your message is received by us:
<br/> Name: $name <br/>
<br/> Email: $email <br/>
<br/> Phone: $phone <br/>
<br/> Message: $message <br/>
You may expect a reply from us withing 24-48  hrs.<br/><br/>
Thank You<br/>
";
$headers = 'From: contact@ecostadvantage.com' . "\r\n" .
    'Reply-To: contact@ecostadvantage.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
    
    header('location:../contactus.php?success');
}
?>