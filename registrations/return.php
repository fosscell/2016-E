<?php
$p_id = $_REQUEST['payment_id'];
$p_r_id = $_REQUEST['payment_request_id'];
require "config.php";
try {
    $response = $api->paymentRequestPaymentStatus([$p_r_id], [$p_id]);
    print_r($response['purpose']);  // print purpose of payment request
    print_r($response['payment']['status']);  // print status of payment
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
?>
<!--
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

<div class="html1" style="width: 1024px;text-align: left;overflow-x: auto;overflow-y: auto; background-color: rgba(0, 0, 0, 0);position: relative;min-height: 768px;; z-index: 0">
<div class="html" style="text-align:left;overflow-x:visible;overflow-y:visible;">
<div class="body" style="vertical-align:bottom;min-height:752px;color:rgb(0, 0, 0);text-align:left;overflow-x:visible;overflow-y:visible;margin: 8px; ">
<br style="text-align:left;"/>
<center>
<h2>Thank you for your payment</h2>
<h3>See you on 26<sup>th</sup> of this month!</h3>
</center>
</div>
</div>
</div>

<div class="html1" style="width: 1024px;text-align: left;overflow-x: auto;overflow-y: auto; background-color: rgba(0, 0, 0, 0);position: relative;min-height: 768px;; z-index: 0">
<div class="html" style="text-align:left;overflow-x:visible;overflow-y:visible;">
<div class="body" style="vertical-align:bottom;min-height:752px;color:rgb(255, 0, 0);text-align:left;overflow-x:visible;overflow-y:visible;margin: 8px; ">
<br style="text-align:left;"/>
<center>
<h2>Sorry, but something went wrong!</h2>
<h3>Please contact your bank for more details!</h3>
</center>
</div>
</div>
</div>


</body>
</html>
-->
