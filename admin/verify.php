<?php
require 'config.php';
$valid_passwords = array ($user_id => $no_pass);
$valid_users = array_keys($valid_passwords);
$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];
$validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);
if (!$validated) {
  header('WWW-Authenticate: Basic realm="admin cPanel"');
  header('HTTP/1.0 401 Unauthorized');
  die ("Not authorized");
}
echo "<!DOCTYPE html><html><head><meta charset='utf-8'><meta http-equiv='X-UA-Compatible' content='IE=edge'><meta name='viewport' content='width=device-width, initial-scale=1'><meta name='apple-mobile-web-app-capable' content='yes' /><link rel='shortcut icon' type='image/png' href='//fossmeet.in/images/logo16.png' /><title>FOSSMeet '16</title><link rel='stylesheet' href='//fossmeet.in/css/payment.css'></head><body>";
try{
  $response = $api->paymentsList();
}
catch (Exception $e){
  print('Error: ' . $e->getMessage());
}
echo "<table><tr><th>name</th><th>status</th><th>amount</th><th>date</th></tr>";
foreach($response as $i){
  echo "<tr>";
  echo "<td>" . $i['buyer_name'] . "</td>";
  echo "<td>" . $i['status'] . "</td>";
  echo "<td>" . $i['currency'] . $i['unit_price'] . "</td>";
  echo "<td>" . $i['created_at'] . "</td>";
  echo "</tr>";
}
echo "</table>";
?>
</body></html>
