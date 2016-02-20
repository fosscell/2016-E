<?php
require_once('global.php');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>FOSSMeet '16</title>

  <link rel="stylesheet" href="css/gads.css">

</head>
<?php
$id = $_POST['parti_name'];
$qry = "SELECT * FROM instamojo_responses WHERE ID = '$id' ;";
$result = $mysqli->query($qry);
if($result->num_row==1){
$o_qry = "SELECT * FROM verifier ORDER BY FOSSMeet_ID DESC;";
$o_result = $mysqli->query($o_qry);
$req_num = dechex(($o_result->num_row) + 1);
$row = $result->fetch_assoc();
$id = $row['ID'];
$name = $row['BUYER_NAME'];
$fmid = $req_num;
$n_qry = "INSERT INTO verifier VALUES('$fmid','$id');";
if($mysqli->query($n_qry) === TRUE){
        //echo "success";
}
else{
        echo "you should not see this messgae!";
        echo "fail";
        die();
}
}
?>
  <img src="img/logo.png" class="gwd-img-1azv">
    <img src="img/icfoss.png" class="gwd-img-1af3">
    <img src="img/sponsor.png" class="gwd-img-79cr">
    <p class="gwd-p-2290">FOSSMeet '16
    </p>
    <p class="gwd-p-1rwh"><?php echo $fmid ?>&nbsp;</p>
    <p class="gwd-p-ngqn">NIT,Calicut</p>
    <p class="gwd-p-lfw1"><?php echo $name ?></p>

</body>
</html>
