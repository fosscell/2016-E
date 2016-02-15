<?php
require_once("global.php");
?>
<?php
require_once("header.php");
?>

		<section class="row">
			<div>

				<?php
					if(!isset($_POST['password'])){
				?>
				<form name="loginFrm" action="" method="POST">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="text" id="username" name="username" />
						<label class="mdl-textfield__label" for="username">Enter your Login ID</label>
					</div>

					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="password" id="password" name="password" />
						<label class="mdl-textfield__label" for="password">Enter your secret Password</label>
					</div>

					<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" type="Submit"><i class="material-icons">-></i></button><br>
				</form>
				<?php
					}
					else{
						$username = $_POST['username'];
						$password = md5($_POST['password']);
						$sqlquery1 = "SELECT * FROM AUTH_USERS WHERE ADMIN_ID = '" . $username . "' AND PASSWORD = '" . $password . "';";

		    				$result1 = $mysqli->query($sqlquery1);

    				if ($result1->num_rows == 1) {
        			$row = $result1->fetch_assoc();
							// this is the admin login
						  // set session and header
							$_SESSION['username'] = $row['ADMIN_ID'];
							header('Location: general_view.php');
						}
										else{
										// no success
										// invalid entry
										// display the login form once again
				?>
				<div class="error message">
					<p>invalid password</p>
				</div>
				<form name="loginFrm" action="" method="POST">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input class="mdl-textfield__input" type="text" id="username" name="username" />
					<label class="mdl-textfield__label" for="username">Enter your Login ID</label>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="password" id="password" name="password" />
					<label class="mdl-textfield__label" for="password">Enter your secret Password</label>
					</div>
				<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" type="Submit"><i class="material-icons">-></i></button><br>
				</form>
				<?php
					}
				}
				?>

			</div>
		</section>

<?php
require_once("footer.php");
?>
