<?php
if($_REQUEST['first_name'] == '' || $_REQUEST['from_email'] == '' ||  $_REQUEST['msg'] == ''){
  return "error";
}
if (filter_var($_REQUEST['from_email'], FILTER_VALIDATE_EMAIL)){
  $subject = 'Email from FOSSMeet webpage'; // Subject of your email

  // Receiver email address
  $to = $_REQUEST['to_email'];  //Change the email address by yours


  // prepare header
  $header = 'From: '. $_REQUEST['first_name'] . " " .$_REQUEST['last_name'] . ' <'. $_REQUEST['from_email'] .'>'. "\r\n";
  $header .= 'Reply-To:  '. $_REQUEST['first_name'] . " " .$_REQUEST['last_name'] . ' <'. $_REQUEST['from_email'] .'>'. "\r\n";
  // $header .= 'Cc:  ' . 'example@domain.com' . "\r\n";
  // $header .= 'Bcc:  ' . 'example@domain.com' . "\r\n";
  $header .= 'X-Mailer: PHP/' . phpversion();


  $message = 'Name: ' . $_REQUEST['first_name'] . " " .$_REQUEST['last_name'] . "\n";
  $message .= 'Email: ' . $_REQUEST['contact_email'] . "\n";
  // $message .= 'Subject: ' . $_REQUEST['contact_subject'] . "\n";
  $message .= 'Message: '. $_REQUEST['message'];

  // Send contact information
  $mail = mail( $to, $subject , $message, $header );
  if($mail){
    echo 'sent';
  }
  }
  else{
    return "error";
  }
?>
