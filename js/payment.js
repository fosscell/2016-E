
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