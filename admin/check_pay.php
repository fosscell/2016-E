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
$id = $_REQUEST['q'];$rspnse = $api->paymentRequestStatus($id);?><style>.tablerow{width: 150px;height: 25px;}</style><table><tr><td class="tablerow"> ID</td><td class="tablerow"><strong><?php echo $rspnse['id'];?></strong></td></tr><tr><td class="tablerow">Phone</td><td class="tablerow"><strong><?php echo $rspnse['phone'];?></strong></td></tr><tr><td class="tablerow">Email</td><td class="tablerow"><strong><?php echo $rspnse['email'];?></strong></td></tr><tr><td class="tablerow">name</td><td class="tablerow"><strong><?php echo $rspnse['buyer_name'];?></strong></td></tr><tr><td class="tablerow">Amount Paid</td><td class="tablerow"><strong><?php echo $rspnse['amount'];?></strong></td></tr><tr><td class="tablerow">Status</td><td class="tablerow"><strong><?php echo $rspnse['status'];?></strong></td></tr><tr><td class="tablerow">MOJO ID</td><td class="tablerow"><strong><?php echo $rspnse['payments'][0]['payment_id']; ?></strong></td></tr><tr><td class="tablerow">time</td><td class="tablerow"><strong><?php echo $rspnse['modified_at']; ?></strong></td></tr></table>