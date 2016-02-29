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
$a=0;$b=0;$c=0;$d=0;$e=0;$f=0;$g=0;$h=0;$i=0;$j=0;$k=0;$l=0;$m=0;$n=0;$o=0;$p=0;$q=0;$r=0;$s=0;$t=0;$u=0;$v=0;$w=0;
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
        case "no":echo "<th>No preference</th>";$a++; break;
        case "29":echo "<th>What is a Linux distribution? - Syam G Krishnan</th>";$b++; break;
        case "1":echo "<th>Golang Workshop - Baiju Muthukadan</th>";$c++; break;
        case "27":echo "<th>FPGA Hacking with Free Software tools - Pramode C.E</th>";$d++; break;
        case "SUMOHAN":echo "<th>Computer Vision / Machine Learning Using Open Source Tools - Sumod Mohan</th>";$e++; break;
        case "30":echo "<th>Evolution of FOSS (and some non-FOSS) stack at HackerRank - Abhimanyu</th>";$f++; break;
        case "16":echo "<th>Y U No fixing WhatsApp? - Pirate Praveen</th>";$g++; break;
        case "2":echo "<th>Intro to Debian Packaging - Balasankar C</th>";$h++; break;
        case "11":echo "<th>MicroHOPE - Introduction to the world of Micro Controllers - Akshai M</th>";$i++; break;
        case "9":echo "<th>Getting Started with Contributing to Open Source - Tapasweni Pathak &amp; Vaishali Thakkar</th>";$j++; break;
        case "22":echo "<th>ReST APIs 101 : Introduction - Shahul Hameed</th>";$k++; break;
        case "19":echo "<th>Contributing to Linux Kernel Workshop - Vaishali Thakkar &amp; Tapasweni Pathak</th>";$l++; break;
        case "13":echo "<th>Introduction to LaTeX and friends - Sasi Kumar</th>";$m++; break;
        case "24":echo "<th>Crowdfunding - Is this really the way to go? - Anish Sheela</th>";$n++; break;
        case "42":echo "<th>GNUKhata, a Professional quality free accounting software - Krishnakant Mane</th>";$o++; break;
        case "205":echo "<th>Programming the NetBSD kernel - Cherry G Mathew</th>";$p++; break;
        case "36":echo "<th>Building your own hackable keyboard - Abhas Abhinav</th>";$q++; break;
        case "MEDIAWIKI":echo "<th>Contributing to MediaWiki - Tony Thomas</th>";$r++; break;
        case "43":echo "<th>Designing the next generation of maps using OpenStreetMap data - Ramya Ragupathy</th>";$s++; break;
        case "CONCUR":echo "<th>The Design of Clojure - Shantanu</th>";$t++; break;
        case "40":echo "<th>Consumer Rights and Digital Freedom - Panel Discussion</th>";$u++; break;
        case "ASD":echo "<th>Getting Started with Contributing to Mozilla - Akshay S Dinesh</th>";$v++; break;   
        case "25":echo "<th>Introduction to non linear functions and fractals -Noufal Ibrahim</th>";$w++; break;        
      }

    }
		echo "</tr>";
	}
echo "</table>\n";
}


echo "<table><tr><th></th><th></th></tr>";
echo "<tr><td>No preference</td><td>$a</td></tr>";
echo "<tr><td>What is a Linux distribution? - Syam G Krishnan</td><td>$b</td></tr>";
echo "<tr><td>Golang Workshop - Baiju Muthukadan</td><td>$c</td></tr>";
echo "<tr><td>FPGA Hacking with Free Software tools - Pramode C.E</td><td>$d</td></tr>";
echo "<tr><td>Computer Vision / Machine Learning Using Open Source Tools - Sumod Mohan</td><td>$e</td></tr>";
echo "<tr><td>Evolution of FOSS (and some non-FOSS) stack at HackerRank - Abhimanyu</td><td>$f</td></tr>";
echo "<tr><td>Y U No fixing WhatsApp? - Pirate Praveen</td><td>$g</td></tr>";
echo "<tr><td>Intro to Debian Packaging - Balasankar C</td><td>$h</td></tr>";
echo "<tr><td>MicroHOPE - Introduction to the world of Micro Controllers - Akshai M</td><td>$i</td></tr>";
echo "<tr><td>Getting Started with Contributing to Open Source - Tapasweni Pathak &amp; Vaishali Thakkar</td><td>$j</td></tr>";
echo "<tr><td>ReST APIs 101 : Introduction - Shahul Hameed</td><td>$k</td></tr>";
echo "<tr><td>Contributing to Linux Kernel Workshop - Vaishali Thakkar &amp; Tapasweni Pathak</td><td>$l</td></tr>";
echo "<tr><td>Introduction to LaTeX and friends - Sasi Kumar</td><td>$m</td></tr>";
echo "<tr><td>Crowdfunding - Is this really the way to go? - Anish Sheela</td><td>$n</td></tr>";
echo "<tr><td>GNUKhata, a Professional quality free accounting software - Krishnakant Mane</td><td>$o</td></tr>";
echo "<tr><td>Programming the NetBSD kernel - Cherry G Mathew</td><td>$p</td></tr>";
echo "<tr><td>Building your own hackable keyboard - Abhas Abhinav</td><td>$q</td></tr>";
echo "<tr><td>Contributing to MediaWiki - Tony Thomas</td><td>$r</td></tr>";
echo "<tr><td>Designing the next generation of maps using OpenStreetMap data - Ramya Ragupathy</td><td>$s</td></tr>";
echo "<tr><td>The Design of Clojure - Shantanu</td><td>$t</td></tr>";
echo "<tr><td>Consumer Rights and Digital Freedom - Panel Discussion</td><td>$u</td></tr>";
echo "<tr><td>Getting Started with Contributing to Mozilla - Akshay S Dinesh</td><td>$v</td></tr>";
echo "<tr><td>Introduction to non linear functions and fractals -Noufal Ibrahim</td><td>$w</td></tr>";
echo "</table>";

?>
</body>
</html>
