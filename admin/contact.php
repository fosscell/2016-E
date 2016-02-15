<?php
$ctnts = "\r\n";
$ctnts .= "INPUT:\r\n";
$ctnts .= "	first_name\r\n";
$ctnts .= "	last_name\r\n";
$ctnts .= "	from_email\r\n";
$ctnts .= "	message\r\n";
$ctnts .= "	to_email\r\n";
$ctnts .= "OUTPUT:\r\n";
$ctnts .= "	successful mail in inbox\r\n";
$ctnts .= "\r\n";

if($_REQUEST['first_name'] == '' || $_REQUEST['last_name'] == '' || $_REQUEST['from_email'] == '' ||  $_REQUEST['message'] == ''){
  echo "error";
  echo nl2br($ctnts);
}
if (filter_var($_REQUEST['from_email'], FILTER_VALIDATE_EMAIL)){
  $subject = 'Email from FOSSMeet webpage'; // Subject of your email
  $to = $_REQUEST['to_email'];  // Receiver email address

  // prepare header
  $header = 'From: '. $_REQUEST['first_name'] . " " .$_REQUEST['last_name'] . ' <'. $_REQUEST['from_email'] .'>'. "\r\n";
  $header .= 'Reply-To:  '. $_REQUEST['first_name'] . " " .$_REQUEST['last_name'] . ' <'. $_REQUEST['from_email'] .'>'. "\r\n";
  // $header .= 'Cc:  ' . 'example@domain.com' . "\r\n";
  // $header .= 'Bcc:  ' . 'example@domain.com' . "\r\n";
  // $header .= 'X-Mailer: PHP/' . phpversion();

  $message = 'Name: ' . $_REQUEST['first_name'] . " " .$_REQUEST['last_name'] . "\n";
  $message .= 'Email: ' . $_REQUEST['from_email'] . "\n";
  // $message .= 'Subject: ' . $_REQUEST['contact_subject'] . "\n";
  $message .= 'Message: '. $_REQUEST['message'];

  // Send contact information
  $mail = mail( $to, $subject , $message, $header );
  if($mail){
    echo 'sent';
  }
}
else{
  echo "error";
  echo nl2br($ctnts);
}
?>

