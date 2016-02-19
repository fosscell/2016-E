<?php
require_once("global.php");
?>
<?php
require_once("header.php");
?>

<?php
  $username = $_SESSION['username'];
    if($username == "0"){
      //echo "admin";
?>
      <div class="info message">
        <p>admin control panel</p>
      </div>
      <br><br><br>

			<div>
			<h3>Add new users</h3>
				<form method="POST" name="insertnewusers" id="insertnewusers">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="username" name="username" />
				<label class="mdl-textfield__label" for="username">Enter your Login ID</label>
			</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="password" id="password" name="password" />
				<label class="mdl-textfield__label" for="password">Enter your secret Password</label>
				</div>
			<button name="insertnewusers" type="button" class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" onclick="addnewuser_superactions()" onsubmit="return false;"><i class="material-icons">-></i></button><br>
			</form>

			</div>

    <?php
    }
    elseif ($username == "reg") {
// reg content here
    ?>
    <div class="info message">
      <p>reg control panel</p>
    </div>

<div class="row">

	<div class="col-xs-6">
			<h3>verify users</h3>

			<form method="POST" action="event_ticket.php" name="verifyusers" id="verifyusers">

				<select name="parti_name" id="parti_name">
					<option value="NA">Not Available</option>
				</select>


        <input type="Submit" value="GO!">

      <br>
			</form>

			</div>

</div>


    <?php

    }
    else{
      header('Location: logout.php');
    }

?>

<?php
require_once("footer.php");
?>
