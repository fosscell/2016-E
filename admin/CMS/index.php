<?php
require_once("global.php");
if(isset($_SESSION['username'])){
  header('Location: general_view.php');
}
else{
  header('Location: login.php');
}
?>
