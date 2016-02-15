<?php
require_once("global.php");
/*
INPUT: typeofreg
OUTPUT: csv((name,value))
*/
$tor = $_REQUEST['typeofreg'];
$tablename = "none";
if($tor == 'OTSR'){
  $tablename = "otsr_responses";
}
else if($tor == 'ONLINE'){
  $tablename = "instamojo_responses";
}
$ret = "";
$qry = "SELECT id,buyer_name FROM $tablename;";
$result = $mysqli->query($qry);
if($result->num_rows>0){
while($row = $result->fetch_assoc()){
  $ret .= $row['id'] . "," . $row['buyer_name'] . ";";
}
}
else{
  $ret .= "error";
}
echo $ret;
?>
