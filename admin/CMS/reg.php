<?php
require_once("global.php");
if ($_SESSION['username'] == 'reg'){
?>
<script type="text/javascript">

function get_name_reg_users(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      var parti_nameD = "";
      var response = xhttp.responseText;
      var A = response.split(',');
      for(var i=0;i<A.length;i++){
	    var individual = A[i].split(';');
        if(individual.length == 2){
          var id = individual[1];
          var name = individual[0];
          parti_nameD = parti_nameD + "<option value='"+id+"'>"+name+"</option>";
        }
      }
      document.getElementById('parti_name').innerHTML = parti_nameD;
    }
  }
  xhttp.open("GET", "list_reg_users.php", true);
  xhttp.send();
}

</script>
<h3>verify users</h3>

<form method="POST" action="event_ticket.php" name="verifyusers" id="verifyusers">

  <select name="parti_name" id="parti_name">
    <option value="NA">Not Available</option>
  </select>


  <input type="Submit" value="GO!">

</form>

<script type="text/javascript">
get_name_reg_users();
</script>
<?php
}
else{
  echo "reg:: not logged in";
}
?>
