<?php
if(isset($_POST['fm16_pay_btn'])){
  require "instamojo.php";

  $api = new Instamojo('[API_KEY]', '[AUTH_TOKEN]');

  try {
    $response = $api->linkCreate(array(
        'title'=>'Hello API',
        'description'=>'Create a new Link easily',
        'base_price'=>100,
        'cover_image'=>'/path/to/photo.jpg'
        ));
    print_r($response);
  }
  catch (Exception $e) {
    print('Error: ' . $e->getMessage());
  }
}
else{

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <link rel="shortcut icon" type="image/png" href="../img/logo16.png" />

    <title>FOSSMeet '16</title>

    <link rel="stylesheet" href="../css/payment.css">

</head>
<body>

<form method="POST" id="payment_form" name="payment_form" parsley-validate novalidate>

  <ul class="form-fields">

    <li class=" columns small-12  ">
      <label for="id_billing_address_first_name">Name:</label>
      <input class="text-input parsley-validated" id="id_billing_address_first_name" maxlength="20" name="billing_address_first_name" parsley-maxlength="20" parsley-maxlength-message="Please keep the length below 20" parsley-required="true" parsley-required-message="Please fill in your name." placeholder="Enter your full name." type="text">
    </li>

    <li class=" columns small-12  ">
      <label for="id_customer_email">Email Address:</label>
      <input class="text-input parsley-validated" id="id_customer_email" maxlength="75" name="customer_email" parsley-required="true" parsley-required-message="Please fill in your email address." parsley-type="email" parsley-type-email-message="Please enter a valid email" placeholder="So we can send you the purchase details." type="email">
    </li>

    <li class=" columns small-12  ">
      <label for="id_customer_phone">Phone Number:</label>
      <input class="text-input parsley-validated" id="id_customer_phone" maxlength="20" name="customer_phone" parsley-maxlength="20" parsley-maxlength-message="Please keep the length below 20" parsley-required="true" parsley-required-message="Please fill in your phone number." parsley-type="phone" parsley-type-phone-message="Please enter a valid phone number" placeholder="Your phone number" type="tel">
    </li>

    <li class=" columns small-12  ">
      <label for="id_Field_72942">Institution Name:</label>
      <input id="id_Field_72942" maxlength="255" name="Field_72942" parsley-required="true" placeholder="" type="text" class="parsley-validated">
    </li>

    <li class=" columns small-12  ">
      <label for="id_Field_52247">Food Preference:</label>
      <input id="id_Field_52247" maxlength="255" name="Field_52247" parsley-required="true" placeholder="" type="text" class="parsley-validated">
    </li>

    <li class=" columns small-12  ">
      <label for="id_Field_65157">FOSSMeet '16 T-Shirts ***:</label>
      <input id="id_Field_65157" maxlength="255" name="Field_65157" parsley-required="true" placeholder="" type="text" class="parsley-validated">
    </li>

    <li class=" columns small-12  ">
      <label for="id_total_amount">Enter Amount:</label>
      <input id="id_total_amount" name="total_amount" parsley-type="number" placeholder="Enter the amount you want to pay." type="text" class="parsley-validated">
    </li>

    <li class="columns small-12 clear"><input value="Next" type="submit" class="btn--green btn--full" name="fm16_pay_btn"></li>

  </ul>

  <!-- Any errors here are handled in offer_view.html -->

</form>

</body>
</html>


<?php
}
?>

