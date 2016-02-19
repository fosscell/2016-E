<?php
require_once("global.php");
if ($_SESSION['username'] == '0'){
?>
<script type="text/javascript">

function addnewuser_superactions(){
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;
  var insertnewusers = "";
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      console.log(xhttp.responseText);
    }
  }
  var formData = "?username="+username+"&password="+password+"&insertnewusers="+insertnewusers;
  xhttp.open("POST", " addnewuser_superuser.php"+formData, true);
  xhttp.send(formData);
}

</script>
<div class="info message">
  <p>admin control panel</p>
</div>
<br><br><br>

<div>
<h3>Add new users</h3>
  <form method="POST" name="insertnewusers" id="insertnewusers">
<div>
  <input type="text" id="username" name="username" />
  <label for="username">Enter your Login ID</label>
</div>
  <div>
  <input type="password" id="password" name="password" />
  <label for="password">Enter your secret Password</label>
  </div>
<button name="insertnewusers" type="button" onclick="addnewuser_superactions()" onsubmit="return false;">add new </button><br>
</form>
</div>
<?php
}
else{
  echo "not logged in";
}
?>
