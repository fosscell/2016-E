$(document).ready(function() {

	$("body").addClass("loaded");

	$(function () {
		$('a[rel="lightbox"]').fluidbox();
	})

});


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


function validateForm(){
var formD = document.forms["payment_form"];

var name = formD["billing_address_first_name"].value;
var email = formD["customer_email"].value;
var phoneno = formD["customer_phone"].value;
var orgname = formD["Field_72942"].value;

if(name == null || name == "" || email == null || email == "" || phoneno == null || phoneno == "" || orgname == null || orgname == ""){
	alert("empty fields");
    return false;
}
}

function get_name_reg_users(){
  var typeofregE = document.getElementById('typeofreg');
  var typeofregD = typeofregE.value;
  var parti_nameE = document.getElementById('parti_name');
  var parti_nameD = "";
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      var response = xhttp.responseText;
      var A = response.split(',');
      for(var i=0;i<A.length;i++){
	var individual = A[i].split(';');
console.log(individual);
        if(individual.length == 2){
          var id = individual[1];
          var name = individual[0];
          parti_nameD = parti_nameD + "<option value='"+id+"'>"+name+"</option>";
        }
      }
      parti_nameE.innerHTML = parti_nameD;
    }
  }
  var formData = "typeofreg="+typeofregD;
  xhttp.open("POST", "list_reg_users.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(formData);
}
