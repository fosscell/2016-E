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
echo "<!DOCTYPE html><html><head><meta charset='utf-8'><meta http-equiv='X-UA-Compatible' content='IE=edge'><meta name='viewport' content='width=device-width, initial-scale=1'><meta name='apple-mobile-web-app-capable' content='yes' /><link rel='shortcut icon' type='image/png' href='//fossmeet.in/img/logo16.png' /><title>FOSSMeet '16</title><link rel='stylesheet' href='//fossmeet.in/css/payment.css'></head><body>";
try{
  $response = $api->paymentsList();
//  print_r($response);
}
catch (Exception $e){
  print('Error: ' . $e->getMessage());
}
echo "total paid: " . count($response);
?>

<table>
<?php
echo "<thead><tr><th>ID</th><th>name</th><th>phone number</th><th>electronic mail</th><th>status</th><th>amount</th><th>date</th><th>Transaction Fees</th><th>org_name</th><th>food prefs</th><th>tshirt</th>";
for($i=0;$i<=9;$i++){
  echo "<th>Preference " . $i . "</th>";
}
echo "</thead></tr><tbody>";
foreach($response as $i){
  echo "<tr>";
  
  $name = $i['buyer_name'];
  $email = $i['buyer_email'];
  $mobno = $i['buyer_phone'];
  
  echo "<td>" . $i['payment_id'] . "</td>";
  echo "<td>" . $i['buyer_name'] . "</td>";
  echo "<td>" . $i['buyer_phone'] . "</td>";
  echo "<td>" . $i['buyer_email'] . "</td>";
  echo "<td>" . $i['status'] . "</td>";
  echo "<td>" . $i['currency'] . $i['unit_price'] . "</td>";
  echo "<td>" . $i['created_at'] . "</td>";    
  echo "<td>" . $i['fees'] . "</td>";  
  
  	$mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);
  	
  	$ary = "SELECT * FROM instamojo_responses ORDER BY modified_at DESC WHERE BUYER_NAME = '$name' AND E_MAIL = '$email' AND PHONE_NUMBER = '$mobno';";
	$rslt2 = $mysqli->query($ary);
	if($rslt2->num_rows == 1){
		$row2 = $rslt2->fetch_assoc();
		echo "<td>" . $row2['ORG_NAME'] . "</td>";
		echo "<td>" . $row2['FOOD_PREFS'] . "</td>";
		echo "<td>" . $row2['TSHIRT_SPEC'] . "</td>";
	}
	else{
		echo "<td colspan='3'>duplicate or incorrect values</td>";
	}

  	
	$qry = "SELECT * FROM ws_prefs WHERE MOJO_ID = '" . $i['payment_id'] . "';";
	$rslt = $mysqli->query($qry);
	$row = $rslt->fetch_assoc();
	if ($rslt->num_rows == 1) {
            $prefones = ltrim($row['PREFS'],';');
	    $the_prefs = explode(";",$prefones);
	    foreach ($the_prefs as $value) {
	    switch($value){
        case "no":echo "<td>No preference</td>"; break;
        case "29":echo "<td>What is a Linux distribution? - Syam G Krishnan</td>"; break;
        case "1":echo "<td>Golang Workshop - Baiju Muthukadan</td>"; break;
        case "27":echo "<td>FPGA Hacking with Free Software tools - Pramode C.E</td>"; break;
        case "SUMOHAN":echo "<td>Computer Vision / Machine Learning Using Open Source Tools - Sumod Mohan</td>"; break;
        case "30":echo "<td>Evolution of FOSS (and some non-FOSS) stack at HackerRank - Abhimanyu</td>"; break;
        case "16":echo "<td>Y U No fixing WhatsApp? - Pirate Praveen</td>"; break;
        case "2":echo "<td>Intro to Debian Packaging - Balasankar C</td>"; break;
        case "11":echo "<td>MicroHOPE - Introduction to the world of Micro Controllers - Akshai M</td>"; break;
        case "9":echo "<td>Getting Started with Contributing to Open Source - Tapasweni Pathak &amp; Vaishali Thakkar</td>"; break;
        case "22":echo "<td>ReST APIs 101 : Introduction - Shahul Hameed</td>"; break;
        case "19":echo "<td>Contributing to Linux Kernel Workshop - Vaishali Thakkar &amp; Tapasweni Pathak</td>"; break;
        case "13":echo "<td>Introduction to LaTeX and friends - Sasi Kumar</td>"; break;
        case "24":echo "<td>Crowdfunding - Is this really the way to go? - Anish Sheela</td>"; break;
        case "42":echo "<td>GNUKhata, a Professional quality free accounting software - Krishnakant Mane</td>"; break;
        case "205":echo "<td>Programming the NetBSD kernel - Cherry G Mathew</td>"; break;
        case "36":echo "<td>Building your own hackable keyboard - Abhas Abhinav</td>"; break;
        case "MEDIAWIKI":echo "<td>Contributing to MediaWiki - Tony Thomas</td>"; break;
        case "43":echo "<td>Designing the next generation of maps using OpenStreetMap data - Ramya Ragupathy</td>"; break;
        case "CONCUR":echo "<td>The Design of Clojure - Shantanu</td>"; break;
        case "40":echo "<td>Consumer Rights and Digital Freedom - Panel Discussion</td>"; break;
        case "ASD":echo "<td>Getting Started with Contributing to Mozilla - Akshay S Dinesh</td>"; break;   
        case "25":echo "<td>Introduction to non linear functions and fractals -Noufal Ibrahim</td>"; break;
        case "": 
        default:echo "<td>&nbsp;</td>";       break;
	    }
	    }
  	}
  	else{
  	echo "<td colspan='10'>&nbsp;</td>";
  	}
  	    
  echo "</tr></tbody>";
}
echo "</table>";
?>
</body></html>