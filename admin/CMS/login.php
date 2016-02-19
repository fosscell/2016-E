<?php
require_once("global.php");
?>

<!DOCTYPE html>
<html>

<head>
	<title>FOSSMeet '16 :: CMS</title>
		<meta charset="utf-8">
		<link href="css/login.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

				 <!-- start-main -->
				<div class="login-form">
						<h1>Sign In</h1>
						<?php
if (!isset($_POST['submit'])) {
?>
				<form method="POST">
					<li>
						<input type="text" id="name" name="name" class="text" value="">
					</li>
					<li>
						<input type="password" name="password" value="">
					</li>

					 <div class ="forgot">
						<input type="submit" name="submit" value="Log In" >
					</div>
				</form>
				<?php
} else {

    $username = $_POST['name'];
    $password = md5($_POST['password']);

    $sql_q = "SELECT * FROM AUTH_USERS WHERE ADMIN_ID = '$username' AND PASSWORD = '$password' ;";

    $result = $mysqli->query($sql_q);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['ADMIN_ID'];

				if ($_SESSION['username'] == '0'){
					header("Location: admin.php");
				}
				else if ($_SESSION['username'] == 'reg'){
        	header("Location: reg.php");
				}
    } else {
        echo "invalid login!";
?>
						<form method="POST">
							<li>
								<input type="text" id="name" name="name" class="text" value="">
							</li>
							<li>
								<input type="password" name="password" value="">
							</li>

							 <div class ="forgot">

								<input type="submit" value="Sign In" >
							</div>
						</form>
						<?php
    }
}
?>
			</div>
			<!--//End-login-form-->

   				<div class="copy-right">
							<footer>
								<p>&copy; 2016 - CMS built with ❤  by Creative and Intellectual Minds of NIT, Calicut</p>
							 </footer>
					</div>


</body>
</html>
