<?php
require_once("global.php");
    if(isset($_REQUEST['insertnewusers'])){
                $username = $_REQUEST['username'];
                $passhash = md5($_REQUEST['password']);
                $qry = "INSERT INTO AUTH_USERS VALUES('$username','$passhash');";
                if($mysqli->query($qry) === TRUE){
                        echo "success";
                }
                else{
                        echo "fail";
                }
    }
    else{
        echo "unknown";
    }
?>

