<?php

if(isset($_POST['fm16_pay_btn'])){
  require "config.php";

  $uniq_id = $_POST['mojo_id'];

// assuming that user entered correct ID

  $opt0 = $_POST['opt0'];
  $opt1 = $_POST['opt1'];
  $opt2 = $_POST['opt2'];
  $opt3 = $_POST['opt3'];
  $opt4 = $_POST['opt4'];
  $opt5 = $_POST['opt5'];
  $opt6 = $_POST['opt6'];
  $opt7 = $_POST['opt7'];
  $opt8 = $_POST['opt8'];
  $opt9 = $_POST['opt9'];

  $prefs = ";" . $opt0 . ";" . $opt1 . ";" . $opt2 . ";" . $opt3 . ";" . $opt4 . ";" . $opt5 . ";" . $opt6 . ";" . $opt7 . ";" . $opt8 . ";" . $opt9 . ";";
  

  //  commit all values to database

  $mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);
  if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
  $qry = "INSERT INTO ws_prefs VALUES('$uniq_id','$prefs');";
  if ($mysqli->query($qry) === TRUE) {


echo "<html> ";
echo "  <head> ";
echo "    <title>FOSSMeet '16</title> ";
echo "    <META http-equiv='refresh' content='5;URL=../index.html'>"; 
echo "  </head> ";
echo "  <body bgcolor='#ffffff'> ";
echo "    <center>Thank you for registration. See you at FOSSMeet '16";
echo "    </center> ";
echo "  </body> ";
echo "</html>";
    


  } else {
    echo "Error creating record: " . $mysqli->error;
  }
}
else{
	print('Invalid data!');
	die();
}
?>
