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
			<h3>On The Spot REG</h3>
<form method="POST" action="" id="payment_form" onsubmit="return validateForm()" name="payment_form" parsley-validate novalidate>

  <ul class="form-fields">

    <div class="row">


    <li class=" columns small-6 clear ">
      <label for="id_billing_address_first_name">Name:</label>
      <input class="text-input parsley-validated" id="id_billing_address_first_name" maxlength="20" name="billing_address_first_name" maxlength="20" placeholder="Enter your full name." type="text" onfocus="document.getElementById('name_hint').style='display: -webkit-flex;display: -ms-flexbox;display: flex;';" onblur="document.getElementById('name_hint').style='display: none;';" required>
    </li>

</div>
    <div class="row">


    <li class=" columns small-6 clear ">
      <label for="id_customer_email">Email Address:</label>
      <input class="text-input parsley-validated" id="id_customer_email" maxlength="75" name="customer_email" parsley-required="true" parsley-required-message="Please fill in your email address." parsley-type="email" parsley-type-email-message="Please enter a valid email" placeholder="So we can send you the purchase details." type="email" onfocus="document.getElementById('email_hint').style='display: -webkit-flex;display: -ms-flexbox;display: flex;';" onblur="document.getElementById('email_hint').style='display: none;';" required>
    </li>


</div>
    <div class="row">

    <li class=" columns small-6 clear  ">
      <label for="id_customer_phone">Phone Number:</label>
      <input class="text-input parsley-validated" id="id_customer_phone" maxlength="20" name="customer_phone" parsley-maxlength="20" parsley-maxlength-message="Please keep the length below 20" parsley-required="true" parsley-required-message="Please fill in your phone number." parsley-type="phone" parsley-type-phone-message="Please enter a valid phone number" placeholder="Your phone number" type="tel" onfocus="document.getElementById('no_hint').style='display: -webkit-flex;display: -ms-flexbox;display: flex;';" onblur="document.getElementById('no_hint').style='display: none;';" required>
    </li>


</div>

    <div class="row">

    <li class=" columns small-6 clear  ">
      <label for="id_total_amount">Enter Amount:</label>
      <select name="total_amount" id="id_total_amount" parsley-type="number" class="parsley-validated" onfocus="document.getElementById('amt_hint').style='display: -webkit-flex;display: -ms-flexbox;display: flex;';" onblur="document.getElementById('amt_hint').style='display: none;';if(document.getElementById('id_total_amount').value == 200) document.getElementById('id_Field_72942').value='National Institute of Technology, Calicut';">
        <option value="200">Students of National Institute of Technology, Calicut -- ₹200 </option>
        <option value="500">Students of other Institutes -- ₹500</option>
        <option value="1000" selected>Professionals -- ₹1000</option>
      </select>
    </li>

</div>


    <div class="row">

    <li class=" columns small-6 clear  ">
      <label for="id_Field_72942">Institution Name:</label>
      <input id="id_Field_72942" maxlength="255" name="Field_72942" parsley-required="true" placeholder="" type="text" class="parsley-validated" onfocus="document.getElementById('inst_hint').style='display: -webkit-flex;display: -ms-flexbox;display: flex;';" onblur="document.getElementById('inst_hint').style='display: none;';" required>
    </li>



</div>
    <div class="row">

    <li class=" columns small-6 clear  ">
      <label for="id_Field_52247">Food Preference:</label>
      <select name="Field_52247" id="id_Field_52247" parsley-required="true" class="parsley-validated" onfocus="document.getElementById('food_hint').style='display: -webkit-flex;display: -ms-flexbox;display: flex;';" onblur="document.getElementById('food_hint').style='display: none;';">
        <option value="veg">Vegetarian</option>
        <option value="non_veg">Non Vegetarian</option>
      </select>
    </li>



</div>
    <div class="row">


<li class="columns small-6 clear">
<div class="text-hint" id="tshirt_hint">Do you want the FOSSMeet '16 official T-Shirts?</div>
</li>

    <li class=" columns small-6 clear  ">
      <label for="id_Field_65157">FOSSMeet '16 T-Shirts <i><small>The registration amount does not include the T-Shirt cost.</small></i>:</label>
      <select name="Field_65157" id="id_Field_65157" parsley-required="true" class="parsley-validated" onfocus="document.getElementById('tshirt_hint').style='display: -webkit-flex;display: -ms-flexbox;display: flex;';" onblur="document.getElementById('tshirt_hint').style='display: none;';">
                <option value="N">No</option><option value="Y">Yes</option>

      </select>
    </li>


</div>

    <div class="row" id="optField">


<li class="columns small-6 clear">
<div class="text-hint" id="tshirt_spec_hint">The size you require for your FOSSMeet '16 official T-Shirts.</div>
</li>

    <li class=" columns small-6 clear  ">
      <label for="TSHIRT_SPEC">Your T-Shirt size: </label>
      <select name="TSHIRT_SPEC" id="id_TSHIRT_SPEC" parsley-required="true" class="parsley-validated" onfocus="document.getElementById('tshirt_hint').style='display: -webkit-flex;display: -ms-flexbox;display: flex;';" onblur="document.getElementById('tshirt_hint').style='display: none;';">
        <option value="NA">Not Applicable</option>
                <option value="S">Small</option>
        <option value="M">Medium</option>
<option value="L">Large</option>
<option value="XL">eXtra Large</option>
<option value="XXL">XXL</option>
      </select>
    </li>


</div>

    <li class="columns small-6 clear"><input value="Pay Now" type="submit" class="btn--green btn--full" name="fm16_pay_btn">
	<!--<p class="text-center"><small class="grey notice display-inline">By purchasing, you've read &amp; agreed to our <a href="terms.html" target="_blank">Terms</a> &amp; <a href="privacy.html" target="_blank">Privacy Policy</a>.</small></p>-->
	</li>

  </ul>


</form>


			</div>


	<div class="col-xs-6">
			<h3>verify users</h3>
			<form method="POST" name="verifyusers" id="verifyusers">
				<select name="typeofreg" id="typeofreg" onblur="get_name_reg_users()">
					<option value="ONLINE">online</option>
					<option value="OTSR">on the spot</option>
				</select>
				<select name="parti_name" id="parti_name">
					<option value="NA">Not Available</option>
				</select>

			<button name="verifyusers" type="button" class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored"><i class="material-icons">-></i></button><br>
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
