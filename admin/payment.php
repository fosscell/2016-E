<?php

if(isset($_POST['fm16_pay_btn'])){
  require "config.php";

  $name = $_POST['billing_address_first_name'];
  $email = $_POST['customer_email'];
  $phoneno = $_POST['customer_phone'];
  $orgname = $_POST['Field_72942'];
  $food_prefs = $_POST['Field_52247'];
  $tshirts = $_POST['Field_65157'];
  $amount = $_POST['total_amount'];

  try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "FOSSMeet 16 Registrations",
        "amount" => $amount,
        "send_email" => true,
        "email" => $email,
        "buyer_name" => $name,
        "phone" => $phoneno,
        "send_sms" => false
        ));
  }
  catch (Exception $e) {
    print('Error: ' . $e->getMessage());
    die();
  }

  // after the transaction request

  $id = $response['id'];
  $purpose = $response['purpose'];
  $status = $response['status'];
  $s_url = $response['shorturl'];
  $l_url = $response['longurl'];
  $mat = $response['modified_at'];

  //  commit all values to database

  $mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);
  if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
  $qry = "INSERT INTO instamojo_responses VALUES('$id','$phoneno','$email','$name',$amount,'$purpose','$status','$s_url','$l_url','$mat','$food_prefs','$tshirts','$orgname');";
  if ($mysqli->query($qry) === TRUE) {
    header("Location: " . $response['longurl']);
  } else {
    echo "Error creating record: " . $mysqli->error;
  }
}
else{
	print('Invalid data!');
	die();
}
?>
