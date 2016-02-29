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
$q = $_REQUEST['q'];
try{
  $rspnse = $api->paymentsList();
}
catch (Exception $e){
  print('Error: ' . $e->getMessage());
}

$len = count($rspnse);
echo "<!--total paid: " . count($rspnse) . "-->";
for($i=0;$i<$len;$i++){
if($q == $rspnse[$i]['payment_id']){

?>
<style>
  .tablerow{
    width: 150px;
    height: 25px;
  }
</style>
<table>
  <tr>
    <td class="tablerow">
      ID
    </td>
    <td class="tablerow">
      <strong>
        <?php echo $rspnse[$i]['payment_id'];?>
      </strong>
    </td>
  </tr>
  <tr>
    <td class="tablerow">
      Phone
    </td>
    <td class="tablerow">
      <strong>
        <?php echo $rspnse[$i]['buyer_phone'];?>
      </strong>
    </td>
  </tr>
  <tr>
    <td class="tablerow">
      Email
    </td>
    <td class="tablerow">
      <strong>
        <?php echo $rspnse[$i]['buyer_email'];?>
      </strong>
    </td>
  </tr>
  <tr>
    <td class="tablerow">
      name
    </td>
    <td class="tablerow">
      <strong>
        <?php echo $rspnse[$i]['buyer_name'];?>
      </strong>
    </td>
  </tr>
  <tr>
    <td class="tablerow">
      Amount Paid
    </td>
    <td class="tablerow">
      <strong>
        <?php echo $rspnse[$i]['amount'];?>
      </strong>
    </td>
  </tr>
 
  <tr>
    <td class="tablerow">
      time
    </td>
    <td class="tablerow">
      <strong>
        <?php echo $rspnse[$i]['created_at']; ?>
      </strong>
    </td>
  </tr>
</table>
<?php
}
}
?>