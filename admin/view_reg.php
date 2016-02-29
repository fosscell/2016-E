<?php
require "config.php";

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
// continue only if authenticated
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="apple-mobile-web-app-capable" content="yes" /><link rel="shortcut icon" type="image/png" href="//fossmeet.in/img/logo16.png" /><title>FOSSMeet '16</title><link rel="stylesheet" href="//fossmeet.in/css/payment.css">
</head>
<body>
<?php
$mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);
$qry = "SELECT * FROM instamojo_responses ORDER BY modified_at DESC;";
$rslt = $mysqli->query($qry);

if ($rslt->num_rows < 0) {
	echo "Error getting record: " . $mysqli->error;
} else {
echo "Total registrations: " . $rslt->num_rows . "<br>";
echo "<table>";
echo "<tr>";
echo "<th></th><th>NAME</th><th>phone number</th><th>electronic mail</th><th>name</th><th>amount paid</th><th>payment link</th><th>food preference</th><th>t-shirt</th>";
echo "</tr>";
	// output data of each row
	while($row = $rslt->fetch_assoc()) {


		echo "<tr>";
		//echo "<td>".$row['ID']."</td>";

		echo "<td>".$row['modified_at']."</td>";
		echo "<td>".$row['BUYER_NAME']."</td>";
		echo "<td>".$row['PHONE_NUMBER']."</td>";
		echo "<td>".$row['E_MAIL']."</td>";
		echo "<td>".$row['ORG_NAME']."</td>";
		echo "<td>".$row['AMOUNT_PAID']."</td>";
		//echo "<td>".$row['purpose']."</td>";
		//echo "<td>".$row['STATUS']."</td>";
		//echo "<td>".$row['SHORT_URL']."</td>";
		echo "<td>><a target='_blank' href=\"check_pay.php?q=".$row['ID']."\">here</a></td>";
		echo "<td>".$row['FOOD_PREFS']."</td>";
		echo "<td>".$row['T_SHIRTS']."</td>";
		echo "<td>".$row['TSHIRT_SPEC']."</td>";
		echo "</tr>";

	}
echo "</table>\n";
}

?>
</body>
</html>