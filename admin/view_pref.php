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
$qry = "SELECT * FROM ws_prefs;";
$rslt = $mysqli->query($qry);

if ($rslt->num_rows < 0) {
	echo "Error getting record: " . $mysqli->error;
} else {
echo "Total results: " . $rslt->num_rows . "<br>";
echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
for($i=0;$i<=9;$i++){
  echo "<th>Pref" . $i . "</th>";
}
echo "</tr>";
	// output data of each row
	while($row = $rslt->fetch_assoc()) {
		echo "<tr>";
		//echo "<td>".$row['ID']."</td>";
		echo "<td>".$row['MOJO_ID']."</td>";
    $prefones = ltrim($row['PREFS'],';');
    $the_prefs = explode(";",$prefones);
    foreach ($the_prefs as $value) {
      switch($value){
        case "no":echo "<th>No preference</th>"; break;
        case "29":echo "<th>What is a Linux distribution? - Syam G Krishnan</th>"; break;
        case "1":echo "<th>Golang Workshop - Baiju Muthukadan</th>"; break;
        case "27":echo "<th>FPGA Hacking with Free Software tools - Pramode C.E</th>"; break;
        case "SUMOHAN":echo "<th>Computer Vision / Machine Learning Using Open Source Tools - Sumod Mohan</th>"; break;
        case "30":echo "<th>Evolution of FOSS (and some non-FOSS) stack at HackerRank - Abhimanyu</th>"; break;
        case "16":echo "<th>Y U No fixing WhatsApp? - Pirate Praveen</th>"; break;
        case "2":echo "<th>Intro to Debian Packaging - Balasankar C</th>"; break;
        case "11":echo "<th>MicroHOPE - Introduction to the world of Micro Controllers - Akshai M</th>"; break;
        case "9":echo "<th>Getting Started with Contributing to Open Source - Tapasweni Pathak &amp; Vaishali Thakkar</th>"; break;
        case "22":echo "<th>ReST APIs 101 : Introduction - Shahul Hameed</th>"; break;
        case "19":echo "<th>Contributing to Linux Kernel Workshop - Vaishali Thakkar &amp; Tapasweni Pathak</th>"; break;
        case "13":echo "<th>Introduction to LaTeX and friends - Sasi Kumar</th>"; break;
        case "24":echo "<th>Crowdfunding - Is this really the way to go? - Anish Sheela</th>"; break;
        case "42":echo "<th>GNUKhata, a Professional quality free accounting software - Krishnakant Mane</th>"; break;
        case "205":echo "<th>Programming the NetBSD kernel - Cherry G Mathew</th>"; break;
        case "36":echo "<th>Building your own hackable keyboard - Abhas Abhinav</th>"; break;
        case "MEDIAWIKI":echo "<th>Contributing to MediaWiki - Tony Thomas</th>"; break;
        case "43":echo "<th>Designing the next generation of maps using OpenStreetMap data - Ramya Ragupathy</th>"; break;
        case "CONCUR":echo "<th>The Design of Clojure - Shantanu</th>"; break;
        case "40":echo "<th>Consumer Rights and Digital Freedom - Panel Discussion</th>"; break;
        case "ASD":echo "<th></th>"; break;        
      }

    }
		echo "</tr>";
	}
echo "</table>\n";
}

?>
</body>
</html>
