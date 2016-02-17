<?php
require_once("global.php");
if(isset($_SESSION['username'])){
/*
INPUT: nothing
OUTPUT: csv((name,value))
*/
$tablename = "instamojo_responses";
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
}
else{
  echo "invalid data!";
}
?>
